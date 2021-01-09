<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactu;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.contact');
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $data =  $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'message'=> 'required',
            'companyName'=> 'required',
            'phoneNumber'=> 'required',
            'Country'=> 'required'
         
        ]);

        Mail::to('test@test.com')
        ->send(new ContactUsMail($data));
    
        

      $message = new Contactu;
      $message->name = $request->input('name');
      $message->email = $request->input('email');
      $message->message = $request->input('message');
      $message->phoneNumber = $request->input('phoneNumber');
      $message->companyName = $request->input('companyName');
      $message->country = $request->input('Country');
      $message->save();

      return redirect('/contact')->with('success','message sent');


    }


}
