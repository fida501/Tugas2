<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show(){
        return "Controller Work !! ";
    }
    public function delete(){
        return "Controller delete work";
    }
    public function insert(){
        return "function insert Work";
    }
}
