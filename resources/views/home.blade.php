

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Books</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
      
        <link href="/css/checkout.css" rel="stylesheet">
       <link href="/css/header.css" rel="stylesheet">
       <link href="/css/home.css" rel="stylesheet">
       <header class="header">
<section class="flex">
<a href="" class="logo">Bus.</a>

<nav class="navbar">
 
    <a href="/">HOME</a>

    <a href="">MAKE BOOKINGS</a>

    <a href="">CHECK TICKETS</a>

    <a href="/register">{{ Auth::user()->name }}</a>

</section>

</header>

   





<!--- header section ends -->
<!-- checkout section starts -->
<body>

<div class="container">
    <form action="">
        <div class="row">
        <div class="col">
             <center>    <h3 class="title">IMPORTANT!</h3></center>
                 <div class="impotant">
              <center>  
                <h2>    Before Buying Tickets. Please have a look >> <a href="">How to book?</a></h2>
              </center>
                 </div>

                 <div class="inputBox">
                     <span>Select Date </span>
                     <input type="text" placeholder="day/month/year">
                 </div>
                 <div class="inputBox">
                     <span>Origin </span>
                      <input type="text" placeholder="Choose Orgin">
                 </div>
                  <div class="inputBox">
                     <span>Destination</span>
                      <input type="text" placeholder="Choose Desination">
                 </div>
                 



               </div>
     

             <input type="submit" value="Search" class="submit-btn" >
  </form>
  </div>
 
 

   <div class="table">
    
   </div>
         
          </div>

    </body>
</section>
       </footer>
    </body>
</html>

