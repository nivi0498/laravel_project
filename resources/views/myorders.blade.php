@extends('master')
@section("content")

<div class="custom-product">

 <div class="col-sm-10">
<div class="trending-wrapper">
<u><center><h2>My orders </h2></center></u></br>
@foreach($orders as $item)
<div class="row Searched-item cart-list-devider">
<div class="col-sm-3">
<a href="detail/{{$item->id}}">
<img class="treading-image" src="{{$item->gallery}}" >

</a>
</div>

<div class="col-sm-4">
<div class="">
<h4><b>{{$item->name}}</b></h4>
<h5>Delevary Status :{{$item->status}}</h5>
<h5>Address :{{$item->address}}</h5>
<h5>payment status :{{$item->payment_status}}</h5>
<h5>payment method :{{$item->payment_method}}</h5>

</div>
</div>


</div>
@endforeach
</div>

</div>
</div>

@endsection