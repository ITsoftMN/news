<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Http\Resources\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Image;
class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $i = 1;
        $banner = Banner::all();
        return view('admin.banner.index',compact('i'))->with('banner',$banner);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.banner.create');
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
        $banner = new Banner;
        if($request->hasFile('file')){
            $file = Input::file('file');
            $original = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/banner',$original);

            $banner->position = $request->position;
            $banner->image = $original;
            $banner->links = $request->banner_links;
            $banner->video_link = $request->banner_video;
            $banner->save();

            return redirect()->route('banner.index');
        }else{
            $banner->position = $request->position;
            $banner->links = $request->banner_links;
            $banner->video_link = $request->banner_video;
            $banner->save();
            return redirect()->route('banner.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        //
        $banners = Banner::find($banner)->first();
        //dd($edit);
        return view('admin.banner.edit',compact('banners'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $banner)
    {
        //
        $banner = Banner::findOrFail($banner);
        if($request->hasFile('file')){
            $file = Input::file('file');
            $original = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/banner',$original);

            $banner->update([
                'image' => $original,
                'links' => $request->input('banner_links'),
                'video_link' => $request->input('banner_video'),
                'position'   => $request->input('position'),
            ]);


        }else{
            $banner->update([
                'links' => $request->input('banner_links'),
                'video_link' => $request->input('banner_video'),
                'position'   => $request->input('position'),
            ]);
        }
        return redirect()->route('banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
