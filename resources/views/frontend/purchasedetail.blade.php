<x-frontend>

	<div class="container">
		<div class="row pt-5">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12">
				<h3 class="text-center">ရွှေသမှဲ့ပင် ဝါးဓနိ</h3>
				<p class="text-center mt-3">Phone No: 09773907753, 09269822182, 0973074512</p>
			</div>			
		</div>
		
		{{-- <div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-end">
				<a class="btn btn-danger" href="{{ url('/purchasedetail/pdf')}}">Download Invoice</a>
			</div>	
		</div> --}}
	
		<h3 class="text-right mt-3">INVOICE VOUCHER</h3>
		<hr>
		@php $i = 1; @endphp
	
		@if(Auth::user()->id == $orderdetail->user_id)
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-6">
				<p>Name: {{ Auth::user()->name}}</p>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-6">
				<p>Date: {{ $orderdetail->created_at}}</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-6">
				<p>Address: {{ $orderdetail->deliveryaddress}}</p>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-6">
				<p>Voucher No: {{ $orderdetail->voucherno }}</p>
			</div>
		</div>

		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">Description</th>
					<th scope="col">Quantity</th>
					<th scope="col">Unit Price</th>
					<th scope="col">SubTotal</th>
				</tr>
			</thead>
			<tbody>
				
				
				@php 
				$items=$orderdetail->items;
			
				@endphp
				@foreach($items as $item)
				<tr>
					<td scope="col">{{$i++}}</td>
					<td scope="col">{{$item->name}}</td>
					<td scope="col">{{$item->pivot->qty}}</td>
					<td scope="col">{{$item->price}}</td>
					<td scope="col">{{$item->price * $item->pivot->qty}}</td>
				</tr>
					@endforeach
				<tr>
				<td><td>
				<td></td>
				<th>Shipping Fee</th>
				<th>{{ $orderdetail->shipping->fee }}</th>
				</tr>
				<tr>
					<td><td>
					<td></td>
					<th>Total</th>
					<th>{{ $orderdetail->totalamount + $orderdetail->shipping->fee }}</th>
				</tr>
				
			</tbody>
		</table>

		<div class="row">
			<div class="col-12 col-md-6 col-lg-6 col-sm-6">
				<p class="purchasefooter title my-5 justify-content-start d-flex">Thank you for purchasing.</p>
			</div>
			<div class="col-12 col-md-6 col-lg-6 col-sm-6">
				<p class="purchasefooter title my-5 justify-content-end d-flex">Sign <img class="mx-4" src="{{ asset('/img/sign.png') }}" width="50px" height="50px"></p>
			</div>
		</div>
		@endif
	</div>


	{{-- <div>
		{{Auth::user()->id}}
	</div> --}}




</x-frontend>