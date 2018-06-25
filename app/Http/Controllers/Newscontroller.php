<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use App\SubCategory;
use Illuminate\Http\Request;
use Image;
class Newscontroller extends Controller
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
        $news = News::orderBy('created_at','desc')->get();
        return view('admin.news.index',compact('i'))->with('news',$news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cat = Category::all();
        $sub = SubCategory::all();
        return view('admin.news.create')->with('cat',$cat)->with('sub',$sub);
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
        if($request->hasFile('file')){

            $filename = $request->file('file');
            $imageName = time().'.'.$filename->getClientOriginalExtension();
            Image::make($filename)->resize(600,null,function ($constraint){
                $constraint->aspectRatio();
            })->save(public_path('uploads/news/small/'.$imageName));

            Image::make($filename)->save('uploads/news/original/'.$imageName);

            $news = new News;
            $news->title = $request->title;
            $news->medium_title = $request->second_title;
            $news->description = $request->desc;
            $news->cat_id = $request->cat_id;
            $news->image = $imageName;
            $news->save();
        }
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $news = News::find($id);
        return view('admin.news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $news = News::findOrFail($id);
        if($request->hasFile('file')){

            $filename = $request->file('file');
            $imageName = time().'.'.$filename->getClientOriginalExtension();
            Image::make($filename)->resize(600,null,function ($constraint){
                $constraint->aspectRatio();
            })->save(public_path('uploads/news/small/'.$imageName));

            Image::make($filename)->save('uploads/news/original/'.$imageName);

            $news->update([
                'title' => $request->input('title'),
                'medium_title' => $request->input('second_title'),
                'description' =>$request->input('desc'),
                'image' => $imageName
            ]);

        }else{
            $news->update([
                'title' => $request->input('title'),
                'medium_title' => $request->input('second_title'),
                'description' =>$request->input('desc'),
            ]);
        }
        \Session::flash('news_edit','Successfully edited');
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

    }

    public function sliderFromNews($id)
    {
        $slider = News::find($id);
        if($slider->slider == 0)
        {
            $slider->update([
                'slider' => 1,

            ]);

        }else{
            $slider->update([
                'slider' => 0,

            ]);

        }

        return json_encode($slider->slider);
    }
    public function sliderFeatured($id)
    {
        $slider = News::find($id);
        if($slider->featured == 0)
        {
            $slider->update([
                'featured' => 1,
            ]);

        }else{
            $slider->update([
                'featured' => 0,

            ]);

        }

        return json_encode($slider->featured);
    }

}
