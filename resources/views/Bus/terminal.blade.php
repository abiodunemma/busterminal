@extends('layouts.reg')

@section('terminal')
@foreach($data as $data)
<div class="container">
    <div class="local">

 <center>   <h3>Departure List</h3> </center>
    <div class="full">
       
        <table style="width: 100%">
    <tr>
        <th><h2>Route[schedule code] </h2></th>
        <th><h2>Destination Terminal</h2</th>
        <th><h2>Date & Time</h2></th>
        <th><h2>seats</h3></th>
        <th><h2>Price</h2</th>
        <th><h2>Action</h2</th>
    </tr>

    <tr>

        <td><h3></h3></td>
        <td><h3>LAGOS- IPAJA[J0020]<h3></td>
       <td><h3>{{ $data-> destination}}</h3></td>
      <td><h3>{{ $data-> date}}</h3></td>
        <td><h3>{{ $data-> date}}</h3></td>
       <td> <button><a href="/Bus/detail">select</button></a></td>
    </tr>




    </table>
      
    </div>
    </div>
    <button>Go Back</button>
  
</div>
@endforeach
@endsection('terminal')  