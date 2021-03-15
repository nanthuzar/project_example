<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Item;
use App\Models\Shipping;
use App\Models\Order;
use App\Models\OrderDetail;

use Carbon\Carbon;
use Auth;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $popularitems = Item::take(4)->get();
        $randomitems = Item::inRandomOrder()->take(4)->get();
        $newitems = Item::latest()->limit(4)->get();

        $categories = Category::all();
        $items = Item::all();

        return view('frontend.index',compact('popularitems','randomitems','newitems','categories','items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
        
    public function detail($id){
        $item = Item::find($id);

        // $relateditems = Item::where('category_id', $items->category_id)
        //                 ->where('id', '!=', $category->id)
        //                 ->get();

        return view('frontend.detail', compact('item'));
        
                        
        // dd($id);
        // return view('frontend.detail', compact('items'));
    }

    public function product(){

        $items = Item::all();
        return view('frontend.product',compact('items'));
    }

    public function contact(){

        return view('frontend.contact');
    }

    public function about(){

        return view('frontend.about');
    }

    public function cart(){

        $shippings = Shipping::all();
        $orderdetails = OrderDetail::all();
        
        return view('frontend.cart',compact('shippings','orderdetails'));
    }

    public function storeorder(Request $request){
        $carts = json_decode($request->carts);

        $deliveryAddress = $request->deliveryAddress;
        $shippingId = $request->shippingId;
        $totalItem = $request->totalItem;
        $totalAmount = $request->totalAmount;
        // $itemName = $request->name;
        $voucherno = uniqid();
        $orderdate = Carbon::now();

        $status = 0;

        $auth = Auth::user();
        $userid = $auth->id;

        // $order = new Order;
        // $order->voucherno = $voucherno;
        // $order->totalamount = $totalAmount;


        // $order->totalitem = $totalItem;
        // $order->status = $status;
        // $order->deliveryaddress = $deliveryAddress;
        // $order->shipping_id = $shippingId;
        //$order->item_id= $itemId;
        // $order->orderdate = $orderdate;
       

        // $order->user_id = $userid;
        // $order->save();

        $orderdetail = new OrderDetail;
        $orderdetail->voucherno = $voucherno;
        $orderdetail->totalamount = $totalAmount;
        $orderdetail->totalitem = $totalItem;
        $orderdetail->status = $status;
        $orderdetail->deliveryaddress = $deliveryAddress;
        $orderdetail->shipping_id = $shippingId;
        //$orderdetail->itemname= $itemName;

        $orderdetail->orderdate = $orderdate;        
        $orderdetail->user_id = $userid;
        $orderdetail->save();
        // $orderdetail->order_id->attach($order->id)



        foreach ($carts as $value) {
            $orderdetail->items()->attach($value->id,['qty'=>$value->qty]);
            // $orderdetail->item_id = $value->id;
        }

        return response()->json([
            'status' => 'Order Successfully created!'
        ]);
    }

    public function ordersuccess(){

        // $orders = Order::take(1)->latest();
        return view('frontend.ordersuccess');
    }

    public function invoice(){

        // $items = Item::all();
        $orderdetails = OrderDetail::latest()->limit(1)->get();
        return view('frontend.invoice', compact('orderdetails'));
    }

    public function purchase(){

        $auth = Auth::user();
        $orderdetails = OrderDetail::all();
        return view('frontend.purchase', compact('orderdetails'));
    }

    public function purchasedetail($id){

        $orderdetail = Orderdetail::find($id);
        return view('frontend.purchasedetail', compact('orderdetail'));
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
