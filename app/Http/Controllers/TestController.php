<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function sumation(){
        $fastNumber = 10;
        $secondNumber = 20;

        $totalNumber = $fastNumber + $secondNumber;

        return $totalNumber;
    }
}
