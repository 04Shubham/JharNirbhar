<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function seeker(){
        return view('admin.job.seeker');
    }
    public function provider(){
        return view('admin.job.provider');
    }
}
