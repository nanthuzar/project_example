<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Item;
use App\Models\Shipping;
use App\Models\Order;

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
        $categories = Category::all();
        $items = Item::all();
        return view('frontend.index',compact('categories','items'));
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

    public function cart(){

        $shippings = Shipping::all();
        return view('frontend.cart',compact('shippings'));
    }

    public function storeorder(Request $request){
        $carts = json_decode($request->carts);
        $deliveryAddress = $request->deliveryAddress;
        $shippingId = $request->shippingId;
        $totalItem = $request->totalItem;
        $totalAmount = $request->totalAmount;
        $itemId = $request->itemId;
        $voucherno = uniqid();
        $orderdate = Carbon::now();

        $status = 0;

        $auth = Auth::user();
        $userid = $auth->id;

        $order = new Order;
        $order->voucherno = $voucherno;
        $order->totalamount = $totalAmount;
        $order->totalitem = $totalItem;
        $order->status = $status;
        $order->deliveryaddress = $deliveryAddress;
        $order->shipping_id = $shippingId;
        $order->orderdate = $orderdate;
        $order->user_id = $userid;
        $order->save();

        foreach ($carts as $value) {
            $order->items()->attach($value->id,['qty'=>$value->qty]);
        }

        return response()->json([
            'status' => 'Order Successfully created!'
        ]);
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
