@extends('layouts.cia')
@section('cia')
$random_string  = create_unique_card_id() 

<section class="add-product">
<form action="/Bus/CI" method="POST" enctype="multipart/form-data">
    @csrf

    <h3>Complete your Bookings</h3>
    <p>Passanger's name <span>*</span></p>
    <input type="text"  id ="name" name="name" required maxlength="50"
    placeholder="enter passanger name" class="box">

    <p>Customer identity <span>*</span></p>
    <input type="text" id="card" name="card" class="box" required maxlength="250"
    placeholder="ID Card number" class="ab">
<center>
    <p>user :{{ Auth::user()->name  }} <span>*</span></p>
    <p>email: {{ Auth::user()->email  }} <span>*</span></p>
    <p>user id: {{  Auth::User()->id  }} <span>*</span></p>
  
    <p>order staus: {{ session('mssg') }}</p>
</center>
 

   <p>Select Bank <span>*</span></p>
   <select name="bank" id="bank" class="box" required>
<option value="gtb-bank">gtb-bank</option>
<option value="access">access</option>
<option value="zenit">zenit</option>
<option value="fidelity">fidelity</option>
<option value="uba">uba</option>
<option value="first">first</option>
<option value="opay">opay</option>
<option value="palmpay">palmpay</option>
    <input type="submit" value="Process ticket" name="ticket" class="btn">
    <p>{{ session('mssg') }}</p>
</section>








@endsection

