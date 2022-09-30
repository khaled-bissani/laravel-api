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
        $string = $request->string;
        $binary_array=array();
        for($i=0; $i<strlen($string);$i++){
            if(is_numeric($string[$i])){
                $number=$string[$i];
                $binary=0;
                $remaning;
                $order=1;
                while($number!=0){
                    $remaning= $number%2;
                    $number=intdiv($number,2);
                    $binary=$binary+ $remaning*$order;
                    $order=$order*10;
                }
                return substr($string,0,$i).$binary.substr($string,$i+1,-1);
            }
        }
    }
    
    // Fourth Api
    function prefixNotation(){
    }
}
