<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>



<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">-->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    </head>
    <title> E-COMM PROJECT</title>
    <body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
    </body>

    <!--this is cod for aletr msg..
        
    
    <script>
        $(document).ready(function()
        {
          $("button").click(function()
          {
            alert("all set")
          })
        })


    </script>-->

   <style>
    .custom-login
    {
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img
    {
     
      height: 400px !important;
    }

    .custom-product
    {
        height: 600px;
        
    }
    .slider-text
    {
      background-color: #35443585 !important;
    }
   .treading-image
   {
    height: 100px;
   }
   .trening-item
   {
    float: left;
    width: 30%;
   }
   .trending-wrapper
   {
    margin: 160px;
   }
   .detial-img
   {
    height: 200px;
   }
   .cart-list-devider
   {
    border-bottom: 1px solid #ccc;
    margin-bottom: 20px;
    padding-bottom: 20px;
   }
   </style>

</html>