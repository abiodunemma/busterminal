<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\seat;

class SeatController extends Controller
{
    
    public function store(){ 

        $seat = new seat();
         
$seat->userid = request('userid');
$seat->username = request('username');
$seat->marks = request('marks');


$seat->save();

        return view('/Bus/detail'); 
}
}