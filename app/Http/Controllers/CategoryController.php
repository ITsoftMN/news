<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class CategoryController extends Controller
{
    //
    public function index(){
        $cat = Category::orderBy('created_at','desc')->get();

        $selecttype = ['----'];
        foreach ($cat as $c){
            $selecttype[$c->id] = $c->name;
        }

        return view('admin.category.index',compact('cat','selecttype'));
    }

    public function post(Request $request){

        $category = New Category;
        $category->name = $request->name;
        $category->save();
        //dd($category->name);
        if ($request->ajax()){
            $view = view('admin.layouts.category-list',compact('category'))->render();
            return json_encode(['html'=>$view,'name'=> $category ]);
        }
        else{
            return redirect()->back()->with(['success'=>'Амжилттай']);
        }
    }

    public  function subCatPost(Request $request){
        $subcat = New SubCategory;
        $subcat->name = $request->name;
        $subcat->cat_id = $request->cat_id;
        $subcat->save();


        if ($request->ajax()){

            return response()->json(['success'=>'Added new records.'],$subcat);
        }
        else{
            return redirect()->back()->with(['success-sub'=>'Амжилттай subcat']);
        }
    }
}