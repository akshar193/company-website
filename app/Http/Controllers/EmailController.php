<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Order;
use App\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index(Request $req)
    {
        $name=$req->input('name');
        $email=$req->input('email');
        $phone=$req->input('phone');
        $message=$req->input('message');


        $db = new ContactUs;
		$db->name = $name;
		$db->email = $email;
		$db->phone = $phone ;
		$db->message = $message ;

		$db->save();


    	
         
    	Mail::to('amita.srivastava@axters.com')->send(new OrderShipped());
	}
}
