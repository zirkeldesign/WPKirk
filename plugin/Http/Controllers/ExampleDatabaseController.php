<?php

namespace WPKirk\Http\Controllers;

class ExampleDatabaseController extends Controller
{
    public function index()
    {

        return WPKirk()
            ->view('dashboard.database')
            ->withAdminStyles('wp-kirk-common');
    }
}
