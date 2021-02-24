<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CarpenterOrder;
use App\Models\OrderConfirm;
use App\Models\Carpenter;
use App\Models\Item;
use App\Models\Status;

class OrderConfirmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orderconfirms = Orderconfirm::all();
        $carpenterOrders = CarpenterOrder::all();
        return view('backend.orderconfirm.list',compact('carpenterOrders','orderconfirms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $carpenters = Carpenter::all();
        $items = Item::all();
        return view('backend.orderconfirm.new',compact('carpenters','items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carpentername = $request->carpentername;
        $itemname = $request->itemname;
        $qty = $request->qty;
        $confirmdate = $request->confirmdate;
        $duedate = $request->duedate;

        $orderconfirm = new OrderConfirm();
        $orderconfirm->carpenter_id = $carpentername;
        $orderconfirm->item_id = $itemname;
        $orderconfirm->qty = $qty;
        $orderconfirm->confirm_date = $confirmdate;
        $orderconfirm->due_date = $duedate;

        $orderconfirm->save();

        return redirect()->route('orderconfirm.index')->with('successMsg','New Item is ADDED in your data');
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
        $statuses = Status::all();
        return view('backend.orderconfirm.edit',compact('statuses'));
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
        $confirmdate = $request->confirmdate;
        $status = $request->status;

        $orderconfirm = OrderConfirm::find($id);
        $orderconfirm->confirm_date = $confirmdate;
        $orderconfirm->status = $status;
        
        $orderconfirm->save();

        return redirect()->route('orderconfirm.index')->with('successMsg','New Order is ADDED in your data.');
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
