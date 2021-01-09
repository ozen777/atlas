<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;
use Tcg\Voyager\Facades\Voyager;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::whereNull('parent_id')->get();
        $news =  News::orderBy('created_at','desc')->paginate(20);
       

        return view('news.index',['categories'=>$categories,'news'=>$news]);
    }

  
    public function show($id)
    {
        $categories = Category::whereNull('parent_id')->get();
        $news =  News::find($id);
        return view('news.show',compact('news','categories'));
    }

   
}
