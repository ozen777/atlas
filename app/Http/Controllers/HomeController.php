<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactu;
use App\Section1Content;
use App\Section2Content;
use App\SliderImage;
use App\News;
use App\Category;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $news =  News::orderBy('created_at','desc')->paginate(20);
        $image = SliderImage::where('id', '=', 1)->firstOrFail();
        $section1 = Section1Content::where('id', '=', 1)->firstOrFail();
        $section2 = Section2Content::where('id', '=', 1)->firstOrFail();
        $categories = Category::whereNull('parent_id')->get();
        return view('pages.index',compact('image','news','section1','section2','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'message'=> 'required',
            'countryName'=> 'countryName'
        ]);

      $message = new Contactu;
      $message->name = $request->input('name');
      $message->email = $request->input('email');
      $message->message = $request->input('message');
      $message->countryName = $request->input('countryName');
      $message->save();

      return redirect('/')->with('success','message sent');
    }

   
}
