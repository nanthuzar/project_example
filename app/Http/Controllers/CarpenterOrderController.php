<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarpenterOrder;
use App\Models\Item;
use App\Models\Carpenter;
use App\Models\Status;
use Spatie\Permission\Models\Role;

class CarpenterOrderController extends Controller
{
    public function __construct(){
        $this->middleware(['role:admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $carpenterorders =CarpenterOrder::all();
        $statuses=Status::all();
        return view('backend.carpentersorder.list',compact('carpenterorders','statuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $carpenterorders=CarpenterOrder::all();
        $items=Item::all();
        $carpenters=Carpenter::all();
        $statuses=Status::all();

        return view('backend.carpentersorder.new',compact('carpenterorders','items','carpenters','statuses'));
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
        $duedate = $request->duedate;
        $status = $request->status;

        $carpenterorder = new Carpenterorder();
        $carpenterorder->carpenter_id = $carpentername;
        $carpenterorder->item_id = $itemname;
        $carpenterorder->qty = $qty;
        $carpenterorder->due_date = $duedate;
        $carpenterorder->status = $status;

        $carpenterorder->save();
        
        // $carpenterorder->items()->attach($itemname);;

        return redirect()->route('carpenterorder.index')->with('successMsg','New Item is ADDED in your data');
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
        $carpenterorders = Carpenterorder::find($id);
        $items=Item::all();
        $carpenters=Carpenter::all();
        return view('backend.carpentersorder.edit',compact('carpenterorders','items','carpenters'));
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

        $carpenterorder = CarpenterOrder::find($id);
        $carpenterorder->carpenter_id = $carpentername;
        $carpenterorder->item_id = $itemname;
        $carpenterorder->qty = $qty;
        $carpenterorder->due_date = $duedate;
        $carpenterorder->save();

        return redirect()->route('carpenterorder.index')->with('successMsg','New Order is ADDED in your data.');
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
        $carpenterorder = CarpenterOrder::find($id);
        $carpenterorder->delete();

        return redirect()->route('carpenterorder.index')->with('successMsg', 'Existing Item:'.$carpenterorder->name.'is DELETED from your data.');
    }
}
