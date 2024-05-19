<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Service;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::all();
        $services = Service::all();
        return view ("welcome", compact("categories"));
        // return view ("home", compact("categories","services"));
    }

    public function about(){
        return view ("home.about");
    }

    public function contact(){
        return view ("home.contact");
    }

    public function store(Request $request){
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back()->with('success','Your Query Save Successfull.');
    }

    public function faq(){
        return view ("home.faq");
    }

    public function help(){
        return view ("home.help");
    }

    public function privacy(){
        return view ("home.privacy");
    }

    public function terms(){
        return view ("home.terms");
    }
}
