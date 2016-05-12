<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="kirk">
  <h1>Hello, I'm the first <?php echo $plugin->Name ?> view</h1>

  <ul>
    <li><a href="#passing-data">Passing data to view</a></li>
    <li><a href="#configuration">Configuration</a></li>
    <li><a href="#plugin-information">Plugin information</a></li>
    <li><a href="#custom-page">Custom Page</a></li>
  </ul>


  <hr/>
  <a name="passing-data"></a>
  <h2>Passing data to view</h2>

  <p>You may get variable from the controller. For example, the variable <code>kirk</code>is <?php echo $kirk ?></p>

  <hr/>
  <a name="configuration"></a>
  <h2>Configuration</h2>
  <p>Get the <code>custom</code> configuration by using <code>echo $plugin->config( 'custom.sample' )</code></p>
  <p><?php echo $plugin->config( 'custom.sample' ) ?></p>

  <hr/>
  <a name="plugin-information"></a>
  <h2>Plugin information</h2>
  <p>You nay get the plugin infomation by using <code>echo $plugin->Author</code></p>
  <p>Author: <code><?php echo $plugin->Author ?></code></p>
  <p>Description: <code><?php echo $plugin->Description ?></code></p>
  <p>Version: <code><?php echo $plugin->Version ?></code></p>
  <p>Text Domain: <code><?php echo $plugin->TextDomain ?></code></p>

  <hr/>
  <a name="custom-page"></a>
  <h2>Custom Page</h2>
  <p>You may create a custom page without added a menu.</p>
  <p><a href="<?php echo $plugin->getPageUrl( 'custom_page' ) ?>">Custom Page</a></p>

</div>