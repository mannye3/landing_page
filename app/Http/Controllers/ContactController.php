<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request; 

use App\Models\Contact; 

use Mail; 

 

class ContactController extends Controller 

{ 

    public function contactForm() 

    { 

        return view('contactForm'); 

    } 

 

    public function store(Request $request) 

    { 

        $request->validate([ 

            'email' => 'required|email|unique:users,email',
            'ima1' => 'required', 
            'ima2' => 'required', 
            'intrestedin' => 'required',
        ]); 

 

        $input = $request->all(); 

 

        Contact::create($input); 

 

        //  Send mail to admin 

        Mail::send('contactMail', array( 

            'email' => $input['email'], 
            'ima1' => $input['ima1'], 
            'ima2' => $input['ima2'], 
            'intrestedin' => $input['intrestedin'], 

        ), function($message) use ($request){ 

            $message->from($request->email); 

            $message->to('admin@admin.com', 'Admin')->subject('New Subscriber'); 

        }); 

 

        return redirect()->back()->with(['success' => 'Your subscription was successful! ']); 

    } 

} 