<?php

namespace laravel_5_3\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class CookieController extends Controller
{
    public function setCookie(Request $request){

        $minutes = 1;
        $response = new Response('Hello World by william');
        $response->withCookie(cookie('name_testing_by_william', 'Testing Cookie Value', $minutes));
        return $response;
    }
    public function getCookie(Request $request){
        $value = $request->cookie('name_testing_by_william');
        echo $value;
    }
}
