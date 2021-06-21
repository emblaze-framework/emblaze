<?php

namespace App\Http\Controllers;

use Emblaze\Url\Url;
use Emblaze\Http\Response;

class SiteController
{
    public function __construct() {}


    public function index()
    {
        // Output e.g. localhost:8080/users/1/edit
        return Url::path('users/1/edit');
        echo "Hello Harmony8";
    }

    public function dashboard()
    {
        
        
        $names = ['1','2'];
        // return Response::json($names);
        return $names;
    }
}