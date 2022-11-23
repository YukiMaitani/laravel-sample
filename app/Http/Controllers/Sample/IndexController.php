<?php

namespace App\Http\Controllers\Sample;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function show() {
        return 'Hello';
    }

    function  showID($id) {
        return "Hello id:{$id}";
    }
}
