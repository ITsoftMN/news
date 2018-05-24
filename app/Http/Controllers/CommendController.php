<?php

namespace App\Http\Controllers;

use App\Commend;
use Illuminate\Http\Request;

class CommendController extends Controller
{
    //
    public function commendAdd(Request $request){
        $comm = New Commend();
        $comm->user_name = $request->commend_user;
        $comm->commend_text = $request->commend_body;
        $comm->news_id = $request->commend_news_id;
        $comm->save();

        if ($request->ajax()){

            return json_encode($comm);
        }
        else{
            return redirect()->back()->with(['success-sub'=>'Амжилттай Сэтгэгдэл']);
        }
    }
}
