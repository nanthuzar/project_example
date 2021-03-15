$(document).ready(function(){
		
	cartNoti();
	showTable();
	// showamount();	

	$('.addtoCart').on('click', function(){
		var id = $(this).data('id');
		var name = $(this).data('name');
		var price = $(this).data('price');
		var photo = $(this).data('photo');
		var qty = 1;

		var mylist = {id:id, name:name, price:price, photo:photo, qty:qty};

		var cart = localStorage.getItem('cart');
		var cartArray;

		if (cart==null){
			cartArray = Array();
		}else{
			cartArray = JSON.parse(cart);
		}

		var status=false;

		$.each(cartArray, function(i,v){
			if(id == v.id){
				v.qty++;
				status = true;
			}
		});

		if (!status) {
			cartArray.push(mylist);
		}

		var cartData = JSON.stringify(cartArray);
		localStorage.setItem("cart",cartData);

		cartNoti();
	});

	function cartNoti(){
		var cart = localStorage.getItem('cart');
		if (cart) {
			var cartArray = JSON.parse(cart);
			var total =0;
			var noti = 0;
			$.each(cartArray, function(i,v){

				var unitprice = v.price;
				var discount = v.discount;
				var qty = v.qty;
				if (discount) {
					var price = discount;
				}
				else{
					var price = unitprice;
				}
				var subtotal = price * qty;

				noti += qty ++;
				total += subtotal ++;
			})
			$('.count').html(noti);
		}
		else{
			$('.count').html(0);
		}
	}

	function showTable(){
		var cart = localStorage.getItem('cart');

		if(cart){
			$('.shoppingcart_div').show();

			var cartArray = JSON.parse(cart);
			var shoppingcartData = '';

			if (cartArray.length > 0) {
				var total = 0;
				$.each(cartArray, function(i,v){
					var id = v.id;
					var name = v.name;
					var price = v.price;
					var photo = v.photo;
					var qty = v.qty;

					// var str_unitprice = CommaFormatted(price.toString());

					var subtotal = price * qty;
					// var str_subtotal = CommaFormatted(subtotal.toString());

					shoppingcartData +=	`<div class="row card-item">
						<div class="col-md-4">
							<img src="${photo}" width="150px" class="img-fluid">
						</div>
						<div class="col-md-3">
							<div class="card-body">
								<h5 class="card-title">${name}</h5>
								<p class="card-text">${price}</p>
							</div>
						</div>
						<div class="col-sm-3 col-6 col-md-2 pl-0 pr-4 mb-4 mt-4">
                            <div class="input-group mt-2">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary dec" type="button" data-id="${i}"><i class="fa fa-minus"></i></button>
                                </div>
                                <input type="text" size="3" class="form-control bg-light text-center" value="${qty}" readonly value="1" maxlength="3">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary rounded-0 inc" type="button" data-id="${i}"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="offset-md-1 col-md-1 mt-5">
                        	<p>${subtotal}</p>
                        </div>
                        <div class="col-md-1 mt-5">
				  			<a href="javascript:void(0)" class="fs-3 text-danger ml-5 remove_btn" data-id="${i}">
				  				<i class="fas fa-trash fa-2x"></i></i>
				  			</a>
				  		</div>
					</div>
					<hr>`;

					total += subtotal ++;			
				});
				// console.log(total);

				$('#cartDiv').html(shoppingcartData);
				$('.totality').html(total.toString()+' Ks');
			}
		}
	}

	$('#cartDiv').on('click','.inc', function(){
		var id = $(this).data('id');

		var cart=localStorage.getItem("cart");
		var cartArray = JSON.parse(cart);

		$.each(cartArray, function(i,v)
		{
			if(i == id)
			{
				v.qty++;
			}
		})
		
		var cartData = JSON.stringify(cartArray);
		localStorage.setItem('cart',cartData);
		showTable();
		cartNoti();	
	});
	
	$('#cartDiv').on('click','.dec', function(){
		var id = $(this).data('id');

		var cart=localStorage.getItem("cart");
		var cartArray = JSON.parse(cart);
		
		$.each(cartArray,function (i,v) 
		{
			if (i == id) 
			{
				v.qty--;
				if (v.qty == 0) 
				{
					cartArray.splice(id,1);
				}
			}
		})
		
		var cartData = JSON.stringify(cartArray);
		localStorage.setItem('cart',cartData);
		showTable();
		cartNoti();
	});

	$('#cartDiv').on('click','.remove_btn', function(){
		var id = $(this).data('id');
		var cart=localStorage.getItem("cart");
		var cartArray = JSON.parse(cart);

		$.each(cartArray, function(i,v){
			if(i==id){
				cartArray.splice(id,1);				
			}
		})

		var cartData=JSON.stringify(cartArray);

		localStorage.setItem("cart",cartData);

		showTable();
		cartNoti();
	});

	$('.checkoutBtn').on('click', function(){
		var cart = localStorage.getItem('cart');

		var cartArray = JSON.parse(cart);

		var deliveryAddress = $('#floatingTextarea2').val();

		var shippingId = $('#floatingSelect').val();

		extractor=/\((.*)\)/

		var shippingfee = $('#floatingSelect option:selected').text();
		var shippingfee = extractor.exec(shippingfee)[1];
		
		var shippingfee = parseFloat(shippingfee.replace(/,/g, ''));

		var totalAmount =0;
		var totalItem =0;
		$.each(cartArray, function(i,v){
			var id = v.id;
			var name = v.name;
			var price = v.price;
			var qty = v.qty;
			var subtotal = price * qty;

			totalItem += qty++;
			totalAmount += subtotal++;
			totalAmount += shippingfee;

			// console.log(name);
		});

		$.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });

	    $.post('/storeorder',{
	    	carts:cart, name:name, deliveryAddress:deliveryAddress, shippingId:shippingId,
	    	totalItem:totalItem, totalAmount:totalAmount}

	 
	    	
	    	,function(response){
	    	//localstorage clear
	    	localStorage.clear();
	    	location.href="ordersuccess";
	    })
	});

	/*$('#detailamount').on('click','.inc', function(){
		var id = $(this).data('id');

		var cart=localStorage.getItem("cart");
		var cartArray = JSON.parse(cart);

		$.each(cartArray, function(i,v)
		{
			if(i == id)
			{
				v.qty++;
			}
		})
		
		var cartData = JSON.stringify(cartArray);
		localStorage.setItem('cart',cartData);
		showTable();
		cartNoti();	
	});	

	
	$('#detailamount').on('click','.dec', function(){
		var id = $(this).data('id');

		var cart=localStorage.getItem("cart");
		var cartArray = JSON.parse(cart);
		
		$.each(cartArray,function (i,v) 
		{
			if (i == id) 
			{
				v.qty--;
				if (v.qty == 0) 
				{
					cartArray.splice(id,1);
				}
			}
		})
		
		var cartData = JSON.stringify(cartArray);
		localStorage.setItem('cart',cartData);
		//showTable();
		cartNoti();
	});*/

	// function showamount(){
	// 	var cart = localStorage.getItem('cart');

	// 	if(cart){
	// 		$('#detailamount').show();

	// 		var cartArray = JSON.parse(cart);
	// 		var shoppingcartData = '';

	// 		if (cartArray.length > 0) {
	// 			var total = 0;
	// 			$.each(cartArray, function(i,v){
	// 				var id = v.id;
	// 				var name = v.name;
	// 				var price = v.price;
	// 				var photo = v.photo;
	// 				var qty = v.qty;

	// 				// var str_unitprice = CommaFormatted(price.toString());

	// 				var subtotal = price * qty;
	// 				// var str_subtotal = CommaFormatted(subtotal.toString());

	// 				shoppingcartData +=	`<div class="row card-item">
	// 					<div class="col-md-4">
	// 						<img src="${photo}" class="img-fluid">
	// 					</div>
	// 					<div class="col-md-3">
	// 						<div class="card-body">
	// 							<h5 class="card-title">${name}</h5>
	// 							<p class="card-text">${price}</p>
	// 						</div>
	// 					</div>
	// 					<div class="input-group mt-2">
 //                                            <div class="input-group-append">
 //                                                <button class="btn btn-secondary dec" type="button"><i class="fa fa-minus"></i></button>
 //                                            </div>
 //                                            <input type="text" size="3" class="form-control bg-light text-center" readonly value="${qty}" maxlength="3">
 //                                            <div class="input-group-append">
 //                                                <button class="btn btn-secondary rounded-0 inc" type="button"><i class="fa fa-plus"></i></button>
 //                                            </div>
 //                                        </div>
 //                        <div class="col-md-1 mt-5">
	// 			  			<a href="javascript:void(0)" class="fs-3 text-danger ml-5 remove_btn" data-id="${i}">
	// 			  				<i class="fas fa-trash fa-2x"></i></i>
	// 			  			</a>
	// 			  		</div>
	// 				</div>
	// 				<hr>`;

	// 				total += subtotal ++;			
	// 			});
	// 			// console.log(total);

	// 			$('#detailamount').html(shoppingcartData);

	// 		}
	// 	}
	// }

});
