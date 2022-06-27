<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Events;

class EventController extends Controller
{

    public function index(){
       $data=Events::all();
       return view('events',compact('data'));
    } 

    public function detail($id){
        $event=DB::table('events')
        ->select('events.*')
        ->where('id','=',$id)
        ->first();

        return view('event-sub', compact('event'));
    }
}

