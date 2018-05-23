<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use App\Setting;
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
                        //dd($systemT,$nowDate);

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

        $setting = Setting::first();
        $category = Category::all();
        $homeslider = News::where('slider',1)->orderBy('created_at','desc')->get();
        $news = News::all();
        $cat_id = Category::select('id')->get();
        $featured = News::where('featured',1)->orderBy('created_at','desc')->limit(4)->get();

        $catnews = News::all();
        //dd($category1);
        $new = News::orderBy('created_at','desc')->limit(6)->get();

        return view('front.pages.home',compact('date','temp','pNight','cityname','dollarN','dollarC'))
            ->with('setting',$setting)
            ->with('category',$category)
            ->with('homeslider',$homeslider)
            ->with('news',$news)
            ->with('featured',$featured)
            ->with('catnews',$catnews)
            ->with('new',$new)
            ;
    }
}
