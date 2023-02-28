@extends('layouts.dec')
@section('detail')
<center>
<div class="ticket">
  <center> <h2> Ticket Description </h2>
    <div class="des">
        <ul>
        <li>        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M8 5v14l11-7z"/></svg>          Destination Lagos </li>
        <li>      <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M8 5v14l11-7z"/></svg>        Name of Bus CASTRO</li>
        <li>         <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M8 5v14l11-7z"/></svg>            Departure AnyWHERE</li>
            <li>        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M8 5v14l11-7z"/></svg>            Arrival Lagos</li>
            <li>       <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M8 5v14l11-7z"/></svg>             price $57</li>
            <li>       <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M8 5v14l11-7z"/></svg>            Depart Date Saturday,01 january 2023</li>
            <li>       <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M8 5v14l11-7z"/></svg>             Arrival Time at 10:30:00</li>
            <li>       <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M8 5v14l11-7z"/></svg>           Please selecta seat </li>
        <li>    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M8 5v14l11-7z"/></svg>          select a maximum of 4 seats </li>
        </ul>

    </div>
</div>


<div class="seat">
   
<h3>Seat Selection</h3>
<form action="/Bus/detail" method="POST">
@csrf

    <div class="fish">
    <input type="hidden" placeholder=""  name="username" id="username" value="{{ Auth::user()->name  }}">
    <input type="hidden" placeholder=""  name="userid" id="userid" value="{{ Auth::user()->id  }}">
   
    <input type="checkbox" name="marks[]" value="1">1
       <input type="checkbox" name="marks[]" value="2">2</br>
       <input type="checkbox" name="marks[]" value="3">3
       <input type="checkbox" name="marks[]" value="4">4</br>
       <input type="checkbox" name="marks[]" value="5">5
       <input type="checkbox" name="marks[]" value="6">6</br>
       <input type="checkbox" name="marks[]" value="7">7
       <input type="checkbox" name="marks[]" value="8">8</br>
       <input type="checkbox" name="marks[]" value="9">9
       <input type="checkbox" name="marks[]" value="10">10</br>
       <input type="checkbox" name="marks[]" value="11">11
       <input type="checkbox" name="marks[]" value="12">12</br>
       <input type="checkbox" name="marks[]" value="13">13
       <input type="checkbox" name="marks[]" value="14">14</br>
       <input type="checkbox" name="marks[]" value="15">15
       <input type="checkbox" name="marks[]" value="16">16</br>
       <input type="checkbox" name="marks[]" value="17">17
       <input type="checkbox" name="marks[]" value="18">18</br>
       <input type="checkbox" name="marks[]" value="19">19
       <input type="checkbox" name="marks[]" value="20">20</br>
       <input type="checkbox" name="marks[]" value="21">21
       <input type="checkbox" name="marks[]" value="22">22</br>
       <input type="checkbox" name="marks[]" value="23">23
      <a href=""> <button>Driver's Seat</button></a>
 <li>       <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M8 5v14l11-7z"/></svg>   After picking a seat click the next button
   <input type="submit" value="Book your sit Now!" class="btn">

    </div>
</div>

</form>
@endsection