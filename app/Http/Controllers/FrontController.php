<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function frontIndex(){
        $valurl = "http://monxansh.appspot.com/xansh.json?currency=USD|EUR";
        $url = "https://weather-api.now.sh/#";
        $json = file_get_contents($url);
        $data = json_decode($json,true);
        //print_r($data['Cities']);
        foreach ($data as $d){
            foreach ($d as $d1){
                $name = $d1['Name'];
                if($name == 'Улаанбаатар'){
                    $cityname = $name;
                        foreach ($d1['Weathers'] as $d2){
                        $nowDate  = $d2['Date'];
                        $systemT = date("Y-m-d",strtotime("+1 day"));
                        if($systemT == $nowDate)
                        {
                            $date = $d2['Date'];
                            $temp = $d2['TemperatureDay'];
                            $pNight = $d2['PhenoNight'];
                        }
                    }
                }
            }
        }
        $json = file_get_contents($valurl);
        $data = json_decode($json,true);
        foreach ($data as $d){
            $dollar = $d['code'];
            if($dollar == 'USD'){
                $dollarN = $d['name'];
                $dollarC = $d['rate'];
            }
        }
        return view('front.pages.home',compact('date','temp','pNight','cityname','dollarN','dollarC'));
    }
}
