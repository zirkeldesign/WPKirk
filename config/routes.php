<?php

/*
|--------------------------------------------------------------------------
| Custom page routes
|--------------------------------------------------------------------------
|
| Here is where you can regiter all page routes for your custom view.
| Then you will use $plugin->getPageUrl( 'custom_page' ) to get the url.
|
*/

return [

  'custom_page' => [
    'title'      => 'Title of page',
    'capability' => 'read',
    'route'      => [
      'get' => 'Dashboard\DashboardController@customPage',
      'post' => 'Dashboard\DashboardController@customPage',
    ]
  ]

];