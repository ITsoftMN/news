<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $setall = Setting::first();
        return view('admin.partials.setting')->with('setall',$setall);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $setting = new Setting;

        if($request->hasFile('file')){

            $file = Input::file('file');
            $original = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/settings/logo',$original);

            $setting->title = $request->title;
            $setting->copyright = $request->copyright;
            $setting->fb_link = $request->facebook;
            $setting->tw_link = $request->twitter;
            $setting->you_link = $request->youtube;
            $setting->logo = $original;
            $setting->save();
        }
        return redirect()->route('settings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $setting)
    {
        //
        $banner = Setting::findOrFail($setting);

        if($request->hasFile('file')){
            $file = Input::file('file');
            $original = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/settings/logo',$original);

            $banner->update([
                'logo' => $original,
                'title' => $request->input('title'),
                'copyright' => $request->input('copyright'),
                'fb_link'   => $request->input('facebook'),
                'tw_link'   => $request->input('twitter'),
                'you_link'   => $request->input('youtube'),

            ]);
        }else{
            $banner->update([
                'title' => $request->input('title'),
                'copyright' => $request->input('copyright'),
                'fb_link'   => $request->input('facebook'),
                'tw_link'   => $request->input('twitter'),
                'you_link'   => $request->input('youtube'),
            ]);
        }
        return redirect()->route('settings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy($setting)
    {
        //

    }
}
