<?php

namespace WPKirk\Http\Controllers\Dashboard;

use WPKirk\Http\Controllers\Controller;

class DashboardResourceController extends Controller
{

  // GET
  public function index() {
    return WPKirk()->view( 'dashboard.optionsresview' )->with( 'method', 'GET' );
  }

  // POST
  public function store() {
    return WPKirk()->view( 'dashboard.optionsresview' )->with( 'method', 'POST' );
  }

  // PUT AND PATCH
  public function update() {
    return WPKirk()->view( 'dashboard.optionsresview' )->with( 'method', 'PUT AND PATCH' );
  }

  // DELETE
  public function destroy() {
    return WPKirk()->view( 'dashboard.optionsresview' )->with( 'method', 'DELETE' );
  }

}