<x-frontend>

	<div class="container">
		
		<h3 class="text-center pt-3">ရွှေသမှဲ့ပင် ဝါးဓနိ</h3>
		<p class="text-center mt-3">Phone No: 09773907753, 09269822182, 0973074512</p>
	
		<h3 class="text-right">INVOICE VOUCHER</h3>
		<hr>
		@php $i = 1; @endphp
		@foreach($orderdetails as $orderdetail)
	
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
					<th scope="col">Amount</th>
				</tr>
			</thead>
			<tbody>
				
				
					@php 
					$items=$orderdetail->items;
				
					@endphp
					@foreach($items as $item)
					<tr>
					<th scope="col">{{$i++}}</th>
					<th scope="col">{{$item->name}}</th>
					<th scope="col">{{$item->pivot->qty}}</th>
					<th scope="col">{{$item->price}}</th>
					<th scope="col">{{$item->price * $item->pivot->qty}}</th>
				</tr>
					@endforeach
				
			</tbody>
		</table>
		@endif
		@endforeach

		<div class="row">
			<div class="col-12 col-md-6 col-lg-6 col-sm-6">
				<p class="purchasefooter title my-5 justify-content-start d-flex">Thank you for purchasing.</p>
			</div>
			<div class="col-12 col-md-6 col-lg-6 col-sm-6">
				<p class="purchasefooter title my-5 justify-content-end d-flex">Sign <img class="mx-4" src="{{ asset('/img/sign1.png') }}" width="50px" height="50px"></p>
			</div>
		</div>
		
	</div>


	{{-- <div>
		{{Auth::user()->id}}
	</div> --}}




</x-frontend>