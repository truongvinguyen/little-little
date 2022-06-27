<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Redirect;
use App\Models\Orders;
use App\Models\Events;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use phpDocumentor\Reflection\DocBlock\Tags\See;

class HomeController extends Controller
{


    public function index()
    {
        return view('home');
    }
    public function contact()
    {
        return view('contact');
    }

   
}