<?php

namespace WPKirk\Http\Controllers\Dashboard;

use WPKirk\Http\Controllers\Controller;

class DashboardController extends Controller
{

  public function firstMenu()
  {
    return WPKirk()->view( 'dashboard.index' )->with( 'kirk', 'Captain' );
  }

  public function secondMenu()
  {
    return WPKirk()->view( 'dashboard.second' )
                   ->styles( 'common' )
                   ->footerScripts( 'main' );
  }

  public function optionsMenu()
  {
    return WPKirk()->view( 'dashboard.options' );
  }

  public function optionsView()
  {
    return WPKirk()->view( 'dashboard.optionsview' );
  }

  public function saveOptions()
  {
    if ( $this->request->verifyNonce( 'Options' ) ) {

      WPKirk()->options->update( $this->request->getAsOptions() );

      return WPKirk()->view( 'dashboard.optionsview' )->with( 'feedback', 'Options updated!' );
    }
    else {
      return WPKirk()->view( 'dashboard.optionsview' )->with( 'feedback', 'Action Not Allowed!' );
    }
  }

}