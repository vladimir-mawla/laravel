<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TestController extends Controller{
    
    public function sayHi(){
        $message = "From DB";

        return response()->json([
            "status" => "Success",
            "message" => $message
        ], 200);
    }
    public function palindrome(){
        $a=['abc','aba','bac','bab','afd', 'asa'];
        $number=0;
        foreach ($a as $element){
            if ($element==strrev($element)){
                $number++;
            };
        };
        echo $number;
    }
    public function seconds(){
        $sec = time() + (31536000*238) - (105*864000);
        echo $sec;
    }
    public function nominate(){
        $a=["Pablo","Pablo","Pablo","Pablo","Georgio","Nour","Vladimir","Stephanelle","Mohammad","JP","Pablo","Pablo","Pablo"];
        $nominated=rand(0,count($a)-1);
        echo $a[$nominated];
    }



}
