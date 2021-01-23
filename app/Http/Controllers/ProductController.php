<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Category;
use DB;
use Tcg\Voyager\Facades\Voyager;
use GrahamCampbell\Markdown\Facades\Markdown;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::whereNull('parent_id')->get();

        return view('product.index',['categories'=>$categories]);
    }

    public function catalogue()
    {
        $categories = Category::whereNull('parent_id')->get();
        $categoryId = request('category_id');
        if($categoryId ){
            $category = Category::find($categoryId);
            $categoryName = $category->name;
            $categoryImage = $category->image;
            $products = $category->products;
            //for display one category with their products
            
        }else{
            $products = Product::take(10)->get();
        }
      

        return view('product.catalogue',compact('products','categoryName','categories','categoryImage'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', '=', $id)->firstOrFail();
        $categories = Category::whereNull('parent_id')->get();
        $products = Product::take(10)->get();
       
      
       $product_body = Markdown::convertToHtml($product->body);
  
       

        //file
        $new_file = json_decode($product->Instructions)[0];
        $new_file_path = Voyager::image($new_file->download_link);
        $new_file_name = $new_file->original_name; //if you need original file name

        //file2
        $new_file2 = json_decode($product->SDS)[0];
        $new_file_path2 = Voyager::image($new_file2->download_link);
        $new_file_name2 = $new_file2->original_name; //if you need original file name

        return view('product.show',compact('product_body','new_file_name2','product','products','categories','new_file_path','new_file_name','new_file_path2'));


    }

    
}
