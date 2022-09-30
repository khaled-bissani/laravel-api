<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiController extends Controller
{
    // First Api
    function stringSorting(){
    }

    // Second Api
    function numberPlace(Request $request){   
        $num = $request->num;
        $number_place=array();
        $place=1;
        while($num!=0){
            $result = array_merge([$place*($num%10)], $number_place);
            $place=$place*10;
            $num=floor($num/ 10);
            print_r ($result);
        }   
    }

    // Third Api
    function decimalToBinary(){
    }
    
    // Fourth Api
    function prefixNotation(){
    }
}
