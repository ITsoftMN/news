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
        $cat = Category::orderBy('created_at','desc')->paginate(20);

        $selecttype = ['----'];
        foreach ($cat as $c){
            $selecttype[$c->id] = $c->name;
        }

        $subcat = SubCategory::orderBy('created_at','desc')->paginate(7);
        //dd($subcat);

        return view('admin.category.index',compact('cat','selecttype','subcat'));
    }

    public function post(Request $request){

        $category = New Category;
        $category->name = $request->name;
        $category->links = $request->links;
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
    public function edit($id){
        $cat = Category::find($id);
        return view('');
    }

    public function update(Request $request){
        $cat = Category::find($request->cat_id);
        $cat->update([
            'name' => $request->input('name')
        ]);
        if ($request->ajax()){

            return json_encode($cat);
        }
        else{
            return redirect()->back();
        }
    }
    public  function subCatPost(Request $request){
        $subcat = New SubCategory;
        $subcat->name = $request->name;
        $subcat->links = $request->links;
        $subcat->cat_id = $request->cat_id;
        $subcat->save();

        if ($request->ajax()){

            return json_encode($subcat);
        }
        else{
            return redirect()->back()->with(['success-sub'=>'Амжилттай subcat']);
        }
    }
}
