

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BUS</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
      
        <link href="/css/terminal.css" rel="stylesheet">
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
    </head>
<!--- header section ends -->
<!-- checkout section starts -->
<body>
@yield('terminal')
</body>
</html>