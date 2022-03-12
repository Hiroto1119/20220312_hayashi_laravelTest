<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function room($param)
    {
        $item = [
            'param' => $param
        ];
        return view('room', $item);
    }
}
