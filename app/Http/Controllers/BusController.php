<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Bus;
class BusController extends Controller
{
    public function store(){
        $data= Bus::all();
        
    $busse = new Bus();

    
$busse->userid = request('userid');
$busse->username = request('username');
$busse->date = request('date');
$busse->origin = request('origin');
$busse->destination = request('destination');

$busse->save();
return view('Bus.terminal', compact('data'));

    }

    public function show(){

    
        $data= Bus::all();
 
        return view('Bus.terminal', compact('data'));
    
    }



    
        
    
    }

    
    
        

   

    


    
