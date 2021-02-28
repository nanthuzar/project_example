<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CarpenterOrder;
use App\Models\OrderConfirm;
use App\Models\Carpenter;
use App\Models\Item;
use App\Models\Status;
use App\Models\User;

use Spatie\Permission\Models\Role;

class OrderConfirmController extends Controller
{
    public function __construct(){
        $this->middleware(['role:carpenter|admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        $statuses = Status::all();
        $orderconfirms = Orderconfirm::all();
        $carpenterOrders = CarpenterOrder::all();
        return view('backend.orderconfirm.list',compact('carpenterOrders','orderconfirms','statuses','users'));
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
        $statuses = Status::all();
        $items = Item::all();
        return view('backend.orderconfirm.new',compact('carpenters','items','statuses'));
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
        $status = $request->status;
        $duedate = $request->duedate;

        $orderconfirm = new OrderConfirm();
        $orderconfirm->carpenter_id = $carpentername;
        $orderconfirm->item_id = $itemname;
        $orderconfirm->qty = $qty;
        $orderconfirm->confirm_date = $confirmdate;
        $orderconfirm->status_id = $status;
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
        $carpenters =Carpenter::all();
        $items = Item::all();
        $statuses = Status::all();
        $orderconfirm = OrderConfirm::find($id);
        return view('backend.orderconfirm.edit',compact('statuses','carpenters','items','orderconfirm'));
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
        $carpentername = $request->carpentername;
        $itemname = $request->itemname;
        $qty = $request->qty;
        $duedate = $request->duedate;        
        $confirmdate = $request->confirmdate;
        $status = $request->status;

        $orderconfirm = OrderConfirm::find($id);
        $orderconfirm->carpenter_id = $carpentername;
        $orderconfirm->item_id = $itemname;
        $orderconfirm->qty = $qty;
        $orderconfirm->due_date = $duedate;
        $orderconfirm->confirm_date = $confirmdate;

        $orderconfirm->status_id = $status;
        
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
