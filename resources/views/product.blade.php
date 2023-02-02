@extends('master')
@section("content")
<!--<h1>Login Page</h1>
<button class="btn btn-primary">Click on me</button>-->
<br>
<div class="custom-product">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    @foreach($products as $item)
    <div class="item {{$item['id']==44?'active':''}}">
      <a href="detial/{{$item['id']}}">
      <img class="slider-img" src="{{$item['gallery']}}" >
      <div class="carousel-caption slider-text">
       <center> <h4>{{$item['name']}}</h4></center>
        <p>{{$item['description']}}</p>

      </a>
      </div>

      
    
    </div>
    @endforeach
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="treading-image">
  <h3>Trading protect</h3>
  @foreach($products as $item)
  <div class="trening-item">
  <a href="detial/{{$item['id']}}">
      <img class="treading-image" src="{{$item['gallery']}}" >
      <div class="">
        <h4>{{$item['name']}}</h4>
      
      </div>
  </a>
</div>
@endforeach
</div>

@endsection