<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;


class CallController extends Controller
{
    public function index(){
        $calls = Appointment::with('booked_appointments')->get();
        return view('admin.call.index', compact("calls"));
    }
}
