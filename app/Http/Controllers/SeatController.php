<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\seat;

class SeatController extends Controller
{

    
    public function detail(){
       
        return view('Bus.detail'); 
        
    
    }

 
    
    public function store(){ 

        $seat = new seat();
         
$seat->userid = request('userid');
$seat->username = request('username');
$seat->number = request('number');



$seat->save();

        return view('Bus/CI')->with('mssg',' Thanks for your order');
}



}