<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class CategoryController extends Controller
{
    //
    public function index(){
        $cat = Category::orderBy('created_at','desc')->get();
        return view('admin.category.index',compact('cat'));
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
}
