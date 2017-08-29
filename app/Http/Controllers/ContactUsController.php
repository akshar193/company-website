<?php

namespace App\Http\Controllers;

use App\ContactUs;

use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactTable(){
    	return view('datatable.ContactTable');

    }

    public function ContactData()
    {	
        return Datatables::of(ContactUs::query())->make(true);
    } 
}
