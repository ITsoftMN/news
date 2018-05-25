<?php

namespace App\Http\Controllers;

use App\CommendReplay;
use Illuminate\Http\Request;

class CommendReplayController extends Controller
{
    //
    public function replayAdd(Request $request, $id){
        dd($request->all());
        $replay = new CommendReplay;
        $replay->user_name = $request->input('name');
        $replay->commend_text = $request->input('text');
        $replay->commend_id = $id;

        $replay->save();

        if ($request->ajax()){

            return json_encode($replay);
        }
        else{
            return redirect()->back()->with(['success-sub'=>'Амжилттай Сэтгэгдэл']);
        }
    }
}
