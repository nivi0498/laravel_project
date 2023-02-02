@extends('master')
@section("content")
<!--<h1>Login Page</h1>
<button class="btn btn-primary">Click on me</button>-->
<br>
<div class="container custom-login">
<div class="row">
<div class="col-sm-4 col-sm-offset-4">
<form action="register" method="POST">
  <div class="form-group">
    @csrf
    <div>
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
  </div>
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit"  class="btn btn-default">Register</button>
</form>
</div>
</div>
</div>
@endsection