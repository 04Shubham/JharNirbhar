<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Freelancer;

class FreelancerController extends Controller
{
    public function index(){
        $freelancers = Freelancer::all();
        return view('admin.freelancer.index',compact('freelancers'));
    }

}
