<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\Models\Township;
use App\Models\Shipping;
use App\Models\OrderDetail;

class DynamicPDFController extends Controller
{
    //
    function index($id){

    	// $shippings = Shipping::all();
    	// $townships = Township::all();

    	$order_data = $this->get_order_data($id);
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
    	$pdf->loadHTML($this->convert_order_data_to_html());

    	return $pdf->stream();
    }

    function convert_order_data_to_html(){
    	$order_data = $this->get_order_data();
    	$output = '
    	<h3 align="center">Customer Data</h3>
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
    
}
