<?php

/*
|--------------------------------------------------------------------------
| Plugin Menus routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the menu routes for a plugin.
| In this context the route are the menu link.
|
*/

return [
  'wp_kirk_slug_menu' => [
    "page_title" => "WP Kirk Page title",
    "menu_title" => "WP Kirk Menu title",
    'capability' => 'read',
    'icon'       => '',
    'items'      => [
      [
        "page_title" => "Main View",
        "menu_title" => "Main View",
        'capability' => 'read',
        'icon'       => '',
        'route'      => [
          'get' => 'Dashboard\DashboardController@firstMenu'
        ],
      ],
      [
        "page_title" => "Ajax Example",
        "menu_title" => "Ajax Example",
        'capability' => 'read',
        'icon'       => '',
        'route'      => [
          'get' => 'Dashboard\DashboardController@secondMenu'
        ],
      ],
      [
        "page_title" => "Options",
        "menu_title" => "Options",
        'capability' => 'read',
        'icon'       => '',
        'route'      => [
          'get' => 'Dashboard\DashboardController@optionsMenu'
        ],

      ],
      [
        "page_title" => "Options View",
        "menu_title" => "Options View",
        'capability' => 'read',
        'icon'       => '',
        'route'      => [
          'get'  => 'Dashboard\DashboardController@optionsView',
          'post' => 'Dashboard\DashboardController@saveOptions'
        ],
      ],
      [
        "page_title" => "Options View Resource",
        "menu_title" => "Options View Resource",
        'capability' => 'read',
        'icon'       => '',
        'route'      => [
          'resource' => 'Dashboard\DashboardResourceController',
        ],
      ],
      [
        "page_title" => "Html Tags",
        "menu_title" => "Html Tags",
        'capability' => 'read',
        'icon'       => '',
        'route'      => [
          'get' => 'Dashboard\DashboardController@html',
        ],
      ],
    ]
  ]
];
