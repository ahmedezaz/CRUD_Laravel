<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD Operation</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Style.css main file link here -->
        <link rel="stylesheet" type="text/css" href="{{asset('admin/css/style.css')}}">
        

 <body>
<header>
        <ul style="background-color: #F2731E; margin: 0px;">
            <li><a href="{{URL::to('/welcome')}}">Home</a></li>
            <li><a href="{{URL::to('/insert')}}">Insert Information</a></li>
            <li><a href="{{URL::to('/information')}}">All Information</a></li>
        </ul>
       
       <h1 style="text-align: center;">CRUD OPERATION USING LARAVEL</h1>
</header>
@yield('content')
</body>
</html>
