<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd503729acc8aefbfc8a0da86be970c23
{
    public static $files = array (
        'bc6e049621bdb1a6128be14b3f38e9dc' => __DIR__ . '/..' . '/wpbones/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPXFollowgramLight\\WPBones\\' => 27,
            'WPXFollowgramLight\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPXFollowgramLight\\WPBones\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpbones/src',
        ),
        'WPXFollowgramLight\\' => 
        array (
            0 => __DIR__ . '/../..' . '/plugin',
        ),
    );

    public static $classMap = array (
        'WPXFollowgramLight\\Http\\Controllers\\Controller' => __DIR__ . '/../..' . '/plugin/Http/Controllers/Controller.php',
        'WPXFollowgramLight\\Http\\Controllers\\Dashboard\\DashboardController' => __DIR__ . '/../..' . '/plugin/Http/Controllers/Dashboard/DashboardController.php',
        'WPXFollowgramLight\\WPBones\\Container\\Container' => __DIR__ . '/..' . '/wpbones/src/Container/Container.php',
        'WPXFollowgramLight\\WPBones\\Contracts\\Container\\Container' => __DIR__ . '/..' . '/wpbones/src/Contracts/Container/Container.php',
        'WPXFollowgramLight\\WPBones\\Contracts\\Foundation\\Plugin' => __DIR__ . '/..' . '/wpbones/src/Contracts/Foundation/Plugin.php',
        'WPXFollowgramLight\\WPBones\\Database\\Migrations\\Migration' => __DIR__ . '/..' . '/wpbones/src/Database/Migrations/Migration.php',
        'WPXFollowgramLight\\WPBones\\Database\\WordPressOption' => __DIR__ . '/..' . '/wpbones/src/Database/WordPressOption.php',
        'WPXFollowgramLight\\WPBones\\Foundation\\Http\\Request' => __DIR__ . '/..' . '/wpbones/src/Foundation/Http/Request.php',
        'WPXFollowgramLight\\WPBones\\Foundation\\Plugin' => __DIR__ . '/..' . '/wpbones/src/Foundation/Plugin.php',
        'WPXFollowgramLight\\WPBones\\Foundation\\WordPressAjaxServiceProvider' => __DIR__ . '/..' . '/wpbones/src/Foundation/WordPressAjaxServiceProvider.php',
        'WPXFollowgramLight\\WPBones\\Foundation\\WordPressCustomPostTypeServiceProvider' => __DIR__ . '/..' . '/wpbones/src/Foundation/WordPressCustomPostTypeServiceProvider.php',
        'WPXFollowgramLight\\WPBones\\Foundation\\WordPressCustomTaxonomyTypeServiceProvider' => __DIR__ . '/..' . '/wpbones/src/Foundation/WordPressCustomTaxonomyTypeServiceProvider.php',
        'WPXFollowgramLight\\WPBones\\Foundation\\WordPressShortcodesServiceProvider' => __DIR__ . '/..' . '/wpbones/src/Foundation/WordPressShortcodesServiceProvider.php',
        'WPXFollowgramLight\\WPBones\\Html\\Html' => __DIR__ . '/..' . '/wpbones/src/Html/Html.php',
        'WPXFollowgramLight\\WPBones\\Html\\HtmlTag' => __DIR__ . '/..' . '/wpbones/src/Html/HtmlTag.php',
        'WPXFollowgramLight\\WPBones\\Html\\HtmlTagA' => __DIR__ . '/..' . '/wpbones/src/Html/HtmlTagA.php',
        'WPXFollowgramLight\\WPBones\\Html\\HtmlTagButton' => __DIR__ . '/..' . '/wpbones/src/Html/HtmlTagButton.php',
        'WPXFollowgramLight\\WPBones\\Html\\HtmlTagCheckbox' => __DIR__ . '/..' . '/wpbones/src/Html/HtmlTagCheckbox.php',
        'WPXFollowgramLight\\WPBones\\Html\\HtmlTagFieldSet' => __DIR__ . '/..' . '/wpbones/src/Html/HtmlTagFieldSet.php',
        'WPXFollowgramLight\\WPBones\\Html\\HtmlTagForm' => __DIR__ . '/..' . '/wpbones/src/Html/HtmlTagForm.php',
        'WPXFollowgramLight\\WPBones\\Html\\HtmlTagInput' => __DIR__ . '/..' . '/wpbones/src/Html/HtmlTagInput.php',
        'WPXFollowgramLight\\WPBones\\Html\\HtmlTagLabel' => __DIR__ . '/..' . '/wpbones/src/Html/HtmlTagLabel.php',
        'WPXFollowgramLight\\WPBones\\Html\\HtmlTagOptGroup' => __DIR__ . '/..' . '/wpbones/src/Html/HtmlTagOptGroup.php',
        'WPXFollowgramLight\\WPBones\\Html\\HtmlTagOption' => __DIR__ . '/..' . '/wpbones/src/Html/HtmlTagOption.php',
        'WPXFollowgramLight\\WPBones\\Html\\HtmlTagSelect' => __DIR__ . '/..' . '/wpbones/src/Html/HtmlTagSelect.php',
        'WPXFollowgramLight\\WPBones\\Html\\HtmlTagTextArea' => __DIR__ . '/..' . '/wpbones/src/Html/HtmlTagTextArea.php',
        'WPXFollowgramLight\\WPBones\\Routing\\Controller' => __DIR__ . '/..' . '/wpbones/src/Routing/Controller.php',
        'WPXFollowgramLight\\WPBones\\Routing\\Route' => __DIR__ . '/..' . '/wpbones/src/Routing/Route.php',
        'WPXFollowgramLight\\WPBones\\Support\\ServiceProvider' => __DIR__ . '/..' . '/wpbones/src/Support/ServiceProvider.php',
        'WPXFollowgramLight\\WPBones\\Support\\Str' => __DIR__ . '/..' . '/wpbones/src/Support/Str.php',
        'WPXFollowgramLight\\WPBones\\Support\\Widget' => __DIR__ . '/..' . '/wpbones/src/Support/Widget.php',
        'WPXFollowgramLight\\WPBones\\View\\View' => __DIR__ . '/..' . '/wpbones/src/View/View.php',
        'WPXFollowgramLight\\plugin\\Widgets\\FollowgramWidget' => __DIR__ . '/../..' . '/plugin/Widgets/FollowgramWidget.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd503729acc8aefbfc8a0da86be970c23::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd503729acc8aefbfc8a0da86be970c23::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd503729acc8aefbfc8a0da86be970c23::$classMap;

        }, null, ClassLoader::class);
    }
}