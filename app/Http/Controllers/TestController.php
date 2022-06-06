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
    public function group() { 
        $a = ["Pablo", "Alaa", "Georgio", "Vladimir", "Mohamad", "Hsein", "Tarek", "Nour"];
        $select1=0;
        $select2=0;
        while(true){
            $select1 = rand(0, count($a)-1);
            echo json_encode($a[$select1]);
            unset($a[$select1]);
            var_dump($a);
            $select2 = rand(0, count($a)-1);
            echo json_encode($a[$select2]);
            unset($a[$select2]);
            var_dump($a);
        }
    }



}
