<x-frontend>

	<h3 class="title text-center py-3 purchase">Purchase History</h3>
	<hr class="divided">

	<div class="container pt-3">
		<table class="table table-striped">
		<thead>
			<tr>
				<th scope="col-1">No</th>
				<th scope="col-1">Voucher No</th>
				<th scope="col-1">Purchase Date</th>
				<th scope="col-1">Total Item</th>
				
				<th scope="col-1">Amount</th>
				<th scope="col-1">Action</th>
			</tr>
		</thead>
		<tbody>

			@php $i = 1; @endphp
			@foreach($orderdetails as $orderdetail)
			@if((Auth::user()->id == $orderdetail->user_id))
			
			
				
			<tr>
				<th scope="col-1">{{ $i++ }}</th>
				<th scope="col-1">{{ $orderdetail->voucherno }}</th>
				<th scope="col-1">{{ $orderdetail->orderdate }}</th>
				<th scope="col-1">{{ $orderdetail->totalitem }}</th>
				<th scope="col-1">{{ $orderdetail->totalamount + $orderdetail->shipping->fee }}</th>				
				
				<th><a class="btn btn-warning" href="{{ route('frontend.purchasedetail', $orderdetail->id) }}">Detail</a></th>				

			</tr>		

			@endif
			@endforeach
			
		</tbody>
		</table>

		<div class="row">
			<div class="col-12 col-md-12 col-lg-12 col-sm-12">
				<p class="purchasefooter title my-5 text-center">Thank you for purchasing.</p>
			</div>
			
		</div>


	</div>
	

</x-frontend>