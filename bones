#!/usr/bin/env php
<?php

define( 'WPBONES_MINIMAL_PHP_VERSION', "5.5.9" );

if ( version_compare( PHP_VERSION, WPBONES_MINIMAL_PHP_VERSION ) < 0 ) {
  echo "\n\033[33;5;82mWarning!!\n";
  echo "\n\033[38;5;82m\t" . 'You must run with PHP version ' . WPBONES_MINIMAL_PHP_VERSION . ' or greather';
  echo "\033[0m\n\n";
  exit;

}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
  require __DIR__ . '/vendor/autoload.php';
}

/*
|--------------------------------------------------------------------------
| Load WordPress
|--------------------------------------------------------------------------
|
| We have to load the WordPress environment.
|
*/
if ( ! file_exists( __DIR__ . '/../../../wp-load.php' ) ) {
  echo "\n\033[33;5;82mWarning!!\n";
  echo "\n\033[38;5;82m\t" . 'You must be inside "wp-content/plugins/" folders';
  echo "\033[0m\n\n";
  exit;
}

require __DIR__ . '/../../../wp-load.php';

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
  $plugin = require_once __DIR__ . '/bootstrap/plugin.php';
}


/**
 * @class BonesCommandLine
 */
class BonesCommandLine
{

  const VERSION = '0.1.13';

  public function __construct()
  {
    $this->handle();
  }

  public static function run()
  {
    $instance = new self;

    return $instance;
  }


  /*
  |--------------------------------------------------------------------------
  | Internal useful function
  |--------------------------------------------------------------------------
  |
  | Here you will find all internal methods
  |
  */

  protected function help()
  {

    echo '
  o       o o--o      o--o
  |       | |   |     |   |
  o   o   o O--o      O--o  o-o o-o  o-o o-o
   \ / \ /  |         |   | | | |  | |-\'  \
    o   o   o         o--o  o-o o  o o-o o-o

    ';

    $this->info( "\nBones Version " . self::VERSION . "\n" );
    $this->info( "Usage:\n" );
    $this->line( "  command [options] [arguments]" );
    $this->info( "\nAvailable commands:" );
    $this->line( "  install\t\tInstall a new WP Bones plugin" );
    $this->line( "  migrate:create\tCreate a new Migration" );
    $this->line( "  namespace\t\tSet or change the plugin namespace" );

    echo "\n\n";
  }

  //
  protected function line( $str )
  {
    echo "\033[38;5;82m" . $str;
    echo "\033[0m\n";
  }

  //
  protected function info( $str )
  {
    echo "\033[38;5;213m" . $str;
    echo "\033[0m\n";
  }

  //
  protected function ask( $str )
  {
    echo "\n\e[38;5;88m$str\e[0m ";

    $handle = fopen( "php://stdin", "r" );
    $line   = fgets( $handle );

    fclose( $handle );

    return trim( $line, " \n\r" );
  }

  //
  protected function option( $option )
  {
    $argv = $_SERVER[ 'argv' ];

    // strip the application name
    array_shift( $argv );

    return in_array( $option, $argv );
  }

  //

  /**
   * Return an array with all matched files from root folder. This method release the follow filters:
   *
   *     wpdk_rglob_find_dir( true, $file ) - when find a dir
   *     wpdk_rglob_find_file( true, $file ) - when find a a file
   *     wpdk_rglob_matched( $regexp_result, $file, $match ) - after preg_match() done
   *
   * @brief get all matched files
   * @since 1.0.0.b4
   *
   * @param string $path    Folder root
   * @param string $match   Optional. Regex to apply on file name. For example use '/^.*\.(php)$/i' to get only php
   *                        file. Default is empty
   *
   * @return array
   */
  protected function recursiveScan( $path, $match = '' )
  {
    /**
     * Return an array with all matched files from root folder.
     *
     * @brief get all matched files
     * @note  Internal recursive use only
     *
     * @param string $path    Folder root
     * @param string $match   Optional. Regex to apply on file name. For example use '/^.*\.(php)$/i' to get only php file
     * @param array  &$result Optional. Result array. Empty form first call
     *
     * @return array
     */
    function _rglob( $path, $match = '', &$result = array() )
    {
      $files = glob( trailingslashit( $path ) . '*', GLOB_MARK );
      if ( false !== $files ) {
        foreach ( $files as $file ) {
          if ( is_dir( $file ) ) {
            $continue = true; //apply_filters( 'wpdk_rglob_find_dir', true, $file );
            if ( $continue ) {
              _rglob( $file, $match, $result );
            }
          }
          elseif ( ! empty( $match ) ) {
            $continue = true; //apply_filters( 'wpdk_rglob_find_file', true, $file );
            if ( false == $continue ) {
              break;
            }
            $regexp_result = array();
            $error         = preg_match( $match, $file, $regexp_result );
            if ( 0 !== $error || false !== $error ) {
              $regexp_result = true; //apply_filters( 'wpdk_rglob_matched', $regexp_result, $file, $match );
              if ( ! empty( $regexp_result ) ) {
                $result[] = $regexp_result[ 0 ];
              }
            }
          }
          else {
            $result[] = $file;
          }
        }

        return $result;
      }
    }

    $result = array();

    return _rglob( $path, $match, $result );
  }


  /*
  |--------------------------------------------------------------------------
  | Public task
  |--------------------------------------------------------------------------
  |
  | Here you will find all tasks that a user can run from console.
  |
  */

  protected function setNamespace( $namespace )
  {
    // plugin name
    $pluginName = $namespace;

    // sanitize namespace
    $namespace = str_replace( " ", "", $namespace );

    // previous namespace
    list( $previousPluginName, $previousNamespace ) = explode( ",", file_get_contents( 'namespace' ) );

    // check the same?
    if ( $previousNamespace == $namespace ) {
      $this->info( "\nThe new namespace is equal. Nothing to change\n" );
      exit( 0 );
    }

    // previous slug
    $previousSlug = str_replace( "-", "_", sanitize_title( $previousPluginName ) ) . "_slug";
    //$previousSlug = strtolower( str_replace( [ " ", "-" ], "_", $previousPluginName ) ) . "_slug";

    // slug
    $slug = str_replace( "-", "_", sanitize_title( $pluginName ) ) . "_slug";
    //$slug = strtolower( str_replace( [ " ", "-" ], "_", $pluginName ) ) . "_slug";

    // previous css id
    $previousCssId = sanitize_title( $previousPluginName );
    //$previousCssId = strtolower( str_replace( [ " ", "-" ], "-", $previousPluginName ) );

    // current css id
    $currentCssId = sanitize_title( $pluginName );
    //$currentCssId = strtolower( str_replace( [ " ", "-" ], "-", $pluginName ) );

    // remove all composer
    $files = array_filter( array_map( function ( $e ) {
      if ( false === strpos( $e, "vendor/composer/" ) ) {
        return $e;
      }

      return false;
    }, $this->recursiveScan( "*" ) ) );

    // merge
    $files = array_merge( $files, [
      'index.php',
      'composer.json',
    ] );


    // change namespace
    foreach ( $files as $file ) {

      $this->line( "Loading and process " . $file . "..." );

      //
      $content = file_get_contents( $file );
      $content = str_replace( $previousNamespace, $namespace, $content );
      $content = str_replace( $previousSlug, $slug, $content );
      $content = str_replace( $previousPluginName, $pluginName, $content );
      $content = str_replace( $previousCssId, $currentCssId, $content );
      file_put_contents( $file, $content );
    }

    // save new namespace
    file_put_contents( 'namespace', $namespace );

    // run composer
    $res = `composer dump-autoload --optimize`;
  }

  protected function install( $argv )
  {
    // TODO check if the first time or if is time to install

    if ( ! isset( $argv[ 1 ] ) || empty( $argv[ 1 ] ) ) {
      $namespace = $this->ask( 'Enter name of your plugin:' );
    }
    elseif ( isset( $argv[ 1 ] ) && "--help" === $argv[ 1 ] ) {
      $this->line( "\nUsage:" );
      $this->info( "  install <plugin name>\n" );
      $this->line( "Arguments:" );
      $this->info( "  plugin name\tThe name of plugin" );
      exit( 0 );
    }
    else {
      $namespace = $argv[ 0 ];
    }

    $res = `git clone -b develop https://github.com/gfazioli/WPBones.git vendor/wpbones`;

    $this->setNamespace( $namespace );

  }

  protected function migrateCreate( $tablename )
  {
    $filename = sprintf( '%s_create_%s_table.php',
                         date( 'Y_m_d_His' ),
                         strtolower( $tablename ) );

    // previous namespace
    list( $pluginName, $namespace ) = explode( ",", file_get_contents( 'namespace' ) );

    // get the stub
    $content = file_get_contents( "vendor/wpbones/src/Console/stubs/migrate.stub" );
    $content = str_replace( '{Namespace}', $namespace, $content );
    $content = str_replace( '{Tablename}', $tablename, $content );

    file_put_contents( "database/migrations/{$filename}", $content );
  }

  /**
   * Run subtask.
   * Check argv from console and execute a task.
   *
   */
  protected function handle()
  {
    $argv = $_SERVER[ 'argv' ];

    // strip the application name
    array_shift( $argv );

    if ( empty( $argv ) || ( isset( $argv[ 0 ] ) && "--help" === $argv[ 0 ] ) ) {
      $this->help();
    }
    // namespace
    elseif ( $this->option( 'namespace' ) ) {
      if ( ! empty( $argv[ 1 ] ) ) {
        $this->setNamespace( $argv[ 1 ] );
      }
    }
    // installe
    elseif ( $this->option( 'install' ) ) {
      $this->install( $argv );
    }
    // migrate:create {table_name}
    elseif ( $this->option( 'migrate:create' ) ) {
      $this->migrateCreate( $argv[ 1 ] );
    }
  }
}

BonesCommandLine::run();