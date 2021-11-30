<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutingController extends Controller
{
    public function route(Request $request) {
        $url = implode('/', [$request->url, $request->sub1, $request->sub2, $request->sub3]);
        dd($url);
    }
}
