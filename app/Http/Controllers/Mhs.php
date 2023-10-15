<?php

namespace App\Http\Controllers;

use App\Models\Model1;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Mhs extends Controller
{
    public static function read()
    {
        return view('home', ['data'=>Model1::all()]);
    }

    public static function show($a)
    {
        return view( 'detail', [ 'data'=>Model1::find($a) ] );
    }
}
