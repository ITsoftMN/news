<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Resources\Product as ProductResource;
use Illuminate\Support\Facades\Input;


class ProductController extends Controller
{
    //

    public function show($id){
        return new ProductResource(Product::find($id));
    }

    public function showAll(){
        return  ProductResource::collection(Product::all());
    }

    public function upload(Request $request){

        if ($request->hasFile('file')){

            $file = Input::file('file');
            $file->move('uploads/product',$file->getClientOriginalName());

            $news = new Product();
            $news->name = $request->name;
            $news->price = $request->price;
            $news->image = $file->getClientOriginalName();
            $news->save();

            return redirect()->back()->with(['success'=>'Амжилттай нэмэгдлээ.']);
        }
        else{
            Product::create($request->all());
            return redirect()->back()->with(['success'=>'Амжилттай нэмэгдлээ.']);
        }
    }
}
