<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{



 
        


    public function store(){

   
   

        
        $ticket = new Ticket();

     
         
$ticket->name = request('name');
$ticket->card = request('card');
$ticket->bank = request('bank');



$ticket->save();
       

        return redirect('Bus/CI')->with('mssg', 'Thanks for your Booking'); 
        
    
    }

    public function pay(){




       
        return view('Bus.CI'); 
        
    
    }

    

}
