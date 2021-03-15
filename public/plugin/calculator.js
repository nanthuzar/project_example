$(document).ready(function(){

	cartNoti();

	$(".calculator_div").hide();
	$(".calculation_price").hide();
	$("#customize_item_name").hide();
	$(".addtocart_divtwo").hide();
	$(".calculator_divthree").hide();


	$(".choose_size").on('click', function(){
		
		$(".addtocart_div").hide();
		$(".calculator_div").show();
	});

	$(".cancel").on('click', function(){

		$(".addtocart_div").hide();
		$(".calculator_div").hide();
		$(".addtocart_divtwo").show();
	});

	$(".btnsave").on('click', function(){

		var length = $("#length").val();
		var width = $("#width").val();
		var oneft_price = $(this).data('oneft_price');

		var calculation = oneft_price * length * width;

		$('.total').html(calculation);

		$(".item_price").hide();
		$(".calculation_price").show();

		$('.calculation_price').html("Price:" + " " + calculation);		

		$("#item_name").hide();
		$("#customize_item_name").show();

		$('#customize_item_name').html("Item Name:" + " " + "တံခါး" + " " + "(" + length + "ပေ" + "x" + width + "ပေ" +")");

		$(".addtocart_divtwo").show();
	});

	$(".addtoCarttwo").on('click', function(){

		var id = $(this).data('id');
		var photo = $(this).data('photo');

		var length = $("#length").val();
		var width = $("#width").val();
		var oneft_price = $(this).data('oneft_price');
		var price = oneft_price * length * width;

		var name = "တံခါး" + " " + "(" + length + "ပေ" + "x" + width + "ပေ" +")";
		var qty = 1;

		var mylist = {id:id, name:name, price:price, photo:photo, qty:qty};

		var cart = localStorage.getItem('cart');
		var cartArray;

		if (cart==null){
			cartArray = Array();
		}else{
			cartArray = JSON.parse(cart);
		}

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

	$(".choose_size_two").on('click', function(){
		
		$(".addtocart_divthree").hide();
		$(".calculator_divthree").show();
	});

	$(".btnsave_three").on('click', function(){

		var length = $("#length_three").val();
		var width = $("#width_three").val();
		var oneft_price = $(this).data('oneft_price');

		var length = (length * 2) + 1;
		var length_formula = Number(length);
		var width_formula = Number(width) + 0.5;

		var calculation = oneft_price * length_formula * width_formula;
		
		$('.total').html(calculation);

		$(".item_price").hide();
		$(".calculation_price").show();

		$('.calculation_price').html("Price:" + " " + calculation);	

		$("#item_name").hide();
		$("#customize_item_name").show();

		$('#customize_item_name').html("Item Name:" + " " + "ကျည်းဘောင်" + " " + "(" + length + "ပေ" + "x" + width + "ပေ" +")");

		$(".addtocart_divthree").show();
	});

	$(".addtoCartthree").on('click', function(){

		var id = $(this).data('id');
		var photo = $(this).data('photo');

		var length = $("#length_three").val();
		var width = $("#width_three").val();
		var oneft_price = $(this).data('oneft_price');

		var length = (length * 2) + 1;
		var length_formula = Number(length);
		var width_formula = Number(width) + 0.5;

		var price = oneft_price * length_formula * width_formula;

		var name = "ကျည်းဘောင်" + " " + "(" + length + "ပေ" + "x" + width + "ပေ" +")";
		var qty = 1;

		var mylist = {id:id, name:name, price:price, photo:photo, qty:qty};

		var cart = localStorage.getItem('cart');
		var cartArray;

		if (cart==null){
			cartArray = Array();
		}else{
			cartArray = JSON.parse(cart);
		}

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

});