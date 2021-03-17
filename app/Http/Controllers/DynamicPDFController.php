<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\Models\Township;
use App\Models\Shipping;
use App\Models\OrderDetail;

use Auth;

class DynamicPDFController extends Controller
{
    //
    function index(){

    	// $shippings = Shipping::all();
    	// $townships = Township::all();

    	$order_data = $this->get_order_data();
    	return view('dynamic_pdf')->with('order_data', $order_data);

        // $orderdetail = OrderDetail::find($id);
        // return view('dynamic_pdf', compact('$orderdetail'));
    }

    function get_order_data(){
        // $order_data = OrderDetail::find($id);
        $order_data = DB::table('order_details')->get();

    	return $order_data;
    }

    function pdf(){
    	$pdf = \App::make('dompdf.wrapper');
      $pdf->setPaper('A4', 'landscape');
    	$pdf->loadHTML($this->convert_order_data_to_html());

    	return $pdf->stream();
    }

    function convert_order_data_to_html(){
    	$order_data = $this->get_order_data();
    	$output = '
    	<h3 align="center">Briefly Sales Report</h3>
     	<table width="100%" style="border-collapse: collapse; border: 0px;">
      	<tr>
		    <th style="border: 1px solid; padding:12px;" width="20%">Voucher No</th>
		    <th style="border: 1px solid; padding:12px;" width="20%">Total Amount</th>
		    <th style="border: 1px solid; padding:12px;" width="15%">Total Item</th>
		    <th style="border: 1px solid; padding:12px;" width="15%">Order Date</th>
		    <th style="border: 1px solid; padding:12px;" width="10%">Delivery Address</th>
		    <th style="border: 1px solid; padding:12px;" width="10%">Township</th>
		    <th style="border: 1px solid; padding:12px;" width="10%">Customer Name</th>
		   </tr>';  
     	foreach($order_data as $orderdetail)
     	{
      		$output .= '
				      <tr>
				       <td style="border: 1px solid; padding:12px;">'.$orderdetail->voucherno.'</td>
				       <td style="border: 1px solid; padding:12px;">'.$orderdetail->totalamount.'</td>
				       <td style="border: 1px solid; padding:12px;">'.$orderdetail->totalitem.'</td>
				       <td style="border: 1px solid; padding:12px;">'.$orderdetail->orderdate.'</td>
				       <td style="border: 1px solid; padding:12px;">'.$orderdetail->deliveryaddress.'</td>
				       <td style="border: 1px solid; padding:12px;">'.$orderdetail->shipping_id.'</td>
				       <td style="border: 1px solid; padding:12px;">'.$orderdetail->user_id.'</td>
				      </tr>
				      ';
     	}
     $output .= '</table>';
     return $output;
    }

    // function get_purchasedetail_data($id){
    //   $orderdetail = OrderDetail::find($id);

    //   return $orderdetail;
    // }

    // function purchasedetailpdf(){
    //   $pdf = \App::make('dompdf.wrapper');
    //   $pdf->loadHTML($this->convert_purchasedetail_data_to_html());
    // }

    // function convert_purchasedetail_data_to_html(){
    //   $auth = $auth = Auth::user();
    //   $orderdetail = $this->get_purchasedetail_data($id);
    //   $output = '
    //   <div class="container">
    // <div class="row pt-5">
    //   <div class="col-12 col-sm-12 col-md-12 col-lg-12">
    //     <h3 class="text-center">ရွှေသမှဲ့ပင် ဝါးဓနိ</h3>
    //     <p class="text-center mt-3">Phone No: 09773907753, 09269822182, 0973074512</p>
    //   </div>      
    // </div>
    // <div class="row">
    //   <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-end">
    //     <a class="btn btn-danger" href="{{ url('/purchasedetail/pdf')}}">Download Invoice</a>
    //   </div>  
    // </div>
  
    // <h3 class="text-right mt-3">INVOICE VOUCHER</h3>
    // <hr>
    // @php $i = 1; @endphp
   
    
    // <div class="row">
    //   <div class="col-sm-6 col-md-6 col-lg-6">
    //     <p>Name: {{ Auth::user()->name}}</p>
    //   </div>
    //   <div class="col-sm-6 col-md-6 col-lg-6">
    //     <p>Date: {{ $orderdetail->created_at}}</p>
    //   </div>
    // </div>
    // <div class="row">
    //   <div class="col-sm-6 col-md-6 col-lg-6">
    //     <p>Address: {{ $orderdetail->deliveryaddress}}</p>
    //   </div>
    //   <div class="col-sm-6 col-md-6 col-lg-6">
    //     <p>Voucher No: {{ $orderdetail->voucherno }}</p>
    //   </div>
    // </div>
    // '

    // }
    
}
