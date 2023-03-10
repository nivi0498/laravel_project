@extends('master')
@section("content")

<div class="custom-product">

 <div class="col-sm-10">
 <table class="table">
    
    <tbody>
      <tr>
        <td>Amount</td>
        <td>${{$total}}</td>
        
      </tr>
      <tr>
        <td>Text</td>
        <td>$ 0</td>
       
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$ 10</td>
        
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>${{$total+10}}</td>
     
      </tr>
    </tbody>
  </table>
</div>
<form action="/orderplace" method="POST">
  @csrf
  <div class="form-group">
    <textarea name="address" placeholder="Enter Your Address" class="form-control"></textarea><br><br>
  </div>
  <div class="form-group">
    <label for="pwd">Payment Method</label><br><br>
    <input type="radio" value="Online Payment" name="payment"><span>Online Payment</span><br><br>
    <input type="radio" value="EMI Payment"name="payment"><span>EMI Payment</span><br><br>
    <input type="radio" value="Payment On Delivery " name="payment"><span>Payment On Delivery</span>
  </div>
  <button type="submit" class="btn btn-default">Order Now</button>
</form>
</div>

@endsection