<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TestController extends Controller{
    //say hi function
    public function sayHi(){
        $message = "From DB";

        return response()->json([
            "status" => "Success",
            "message" => $message
        ], 200);
    }

    //palindrome function
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

    //seconds function
    public function seconds(){
        $sec = time() + (31536000*238) - (105*864000);
        echo $sec;
    }

    //nominate pablo function
    public function nominate(){
        $a=["Pablo","Pablo","Pablo","Pablo","Georgio","Nour","Vladimir","Stephanelle","Mohammad","JP","Pablo","Pablo","Pablo"];
        $nominated=rand(0,count($a)-1);
        echo $a[$nominated];
    }
    //create group of 2 students
        public function teams() { 
            $a = ["Pablo", "Alaa", "Georgio", "Vladimir", "Mohamad", "Hsein", "Tarek", "Nour"];
            $select1=0;
            $select2=0;
            $team =[];
            $sum = count($a);
            while($select1 < $sum){
                if ($select1 % 2 == 0) {
                    $team[$select2] = [$a[$select1], $a[$select1+1]];
                    $select1 +=2;
                    $select2 +=1;
                } else {
                    $team[$select2] = [$a[$select1]];
                }
/*
                $select1 = rand(0, count($a)-1);
                echo json_encode($a[$select1]);
                unset($a[$select1]);
                var_dump($a);
    
                $select2 = rand(0, count($a)-1);
                echo json_encode($a[$select2]);
                unset($a[$select2]);
                var_dump($a);
*/
               
            }
            return response()->json([
                "result" => $team,], 200);
            
    }

    //get beer recipe
    public function beers(){
        $response = Http::get("https://api.punkapi.com/v2/beers");
        $data = json_decode($response);
        $select = rand(0,((int)$data)-1);
        return response()->json([
            "result" => $response[$select],
        ], 200);
        
        
    }
    //get text
    public function text(){
        $response = Http::get('http://example.com');
        $response_decoded = json_decode($response);
        $text = $response_decoded -> attachments['text'];
        return response()->json([
            "result" => $text,
        ],200);
    }

}