<?php

namespace WPKirk\Http\Controllers;

class ExampleUserAgentController extends Controller
{

    public function index()
    {
        return WPKirk()
            ->view('dashboard.useragent')
            ->withAdminStyles('wp-kirk-common');
    }
}