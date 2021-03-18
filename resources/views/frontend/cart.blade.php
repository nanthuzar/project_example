<x-frontend>

	<h3 class="px-5">Shopping Cart</h3>

	<section id="blog" class="blog">
		<div class="container mt-5">
			<div class="row pb-5 justify-content-center">
				<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12 shoppingcart_div px-3">
					<div id="cartDiv"></div>

					<div class="row justify-content-end mt-4">
				  		<div class="col-md-2">
					  		<p> Cash on Delivery  </p>
					  	</div>
					  	<div class="form-group col offset-md-1 col-12 col-md-4 mb-3">
					  		<div class="form-floating">
					  			<label for="floatingSelect"> Fill Your Township </label>
							  	<select class="form-control col-12 col-lg-10" id="floatingSelect" aria-label="Floating label select example">
							  		@foreach($shippings as $shipping)
							    		<option value="{{ $shipping->id }}"> {{ $shipping->township->name }} ( {{ number_format($shipping->fee) }} ) Ks </option>
							    	@endforeach
							  	</select>						  	
							</div>
					  	</div>
					  	<div class="offset-md-1 col-md-4 justify-content-end">
				  			<div class="form-floating">
				  				<label for="floatingTextarea2"> Delivery Address</label>
							  	<textarea class="form-control" placeholder="" id="floatingTextarea2"  style="height: 70px">
							  		
							  	</textarea>	
							  </div>	
					  	</div>
					  	<hr class="my-3">
					</div>
					<div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column
				  	 bd-highlight justify-content-between mb-3 mt-4">
					  	<div class="p-2 bd-highlight order-xl-1 order-lg-1 order-md-1 order-sm-2 order-2 justify-content-center">
					  		<a href="{{ route('frontend.index')}}" class="more-detail d-block text-center btn btn-warning"> Go Shopping </a>
					  	</div>
					  	<div class="p-2 bd-highlight order-xl-2 order-lg-2 order-md-2 order-sm-1 order-1 justify-content-center">
					  		<span class="fs-6 pe-5 text-uppercase"> Subtotal : </span>
					  		<span class="fs-4 persianred_color fw-bold totality"> </span><br>
					  		
					  	</div>
					  	<div class="p-2 bd-highlight order-xl-3 order-lg-3 order-md-3 order-sm-3 order-3 justify-content-center">
					  		
					  		@guest
					  			{{ session()->put('cartUrl','cart')}}
					  			<a href="{{ route('login') }}" class="order d-block text-center btn btn-success"> Order Confirm </a>
					  		@else
					  			{{-- @foreach($orderdetails as $orderdetail) --}}
					  			<a href="javascript:void(0)" class="order d-block text-center checkoutBtn btn btn-success"> Order Confirm </a>
					  			{{-- @endforeach --}}
					  		@endif
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</x-frontend>