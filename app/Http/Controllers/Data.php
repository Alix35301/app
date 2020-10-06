<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Data extends Controller
{
    // public function loadData(){
    //     $dates = \App\Data::where('from_currency','=',1)->where('to_currency','=',25)->orderBy('date')->take(10)->get()->unique();
    //     foreach($dates as $date)
    //     {
    //         $date->data = \App\Data::where('date',$date)->where('from_currency',1)->where('to_currency',25)->orderBy('conversion_type')->pluck('rate')->toArray();
    //         // dd(\App\Data::where('date',$date)->where('from_currency',1)->where('to_currency',25)->orderBy('conversion_type')->toSql());
    //     }
    //     // $data = \App\Data::where('from_currency','=',1)->where('to_currency','=',25)->orderBy('date')->orderBy('conversion_type')->get();
    //     // $data = \App\Data::all();
    //     // dd($dates);
    //     return view("data",compact('dates'));
    // }


    public function loadData(){
        $data = \App\Data::where('from_currency',1)->where('to_currency',25)->orderBy('date')->get();
        $finalData = array();
        $one = array();
        $two = array();
        $three = array();
        foreach ($data as $value) {
            
            if ($value['conversion_type'] == 1){
                array_push($one,$value);

            }elseif($value['conversion_type'] == 2){
                array_push($two,$value);

            }elseif($value['conversion_type'] == 3){
                array_push($three,$value);

            }
    
          }
          for ($x = 0; $x <= sizeof($one)-1; $x++){
            // echo($one[$x]['date']." ");
            //  echo($one[$x]['rate']." ");
            //  echo($two[$x]['rate']." ");
            //  echo($three[$x]['rate']." ");
             array_push($finalData,[$one[$x]['date'],$one[$x]['rate'],$two[$x]['rate'],$three[$x]['rate']]);
            //  echo("<br/>");
         }
        return view('data',compact("finalData"));

        
    }
}