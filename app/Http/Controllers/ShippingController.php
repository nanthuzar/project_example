<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipping;
use App\Models\Township;
use Spatie\Permission\Models\Role;

class ShippingController extends Controller
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
        $shippings =Shipping::all();
        $townships =Township::all();
        return view('backend.shipping.list',compact('shippings','townships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $shippings=Shipping::all();
        $townships =Township::all();
        return view('backend.shipping.new',compact('townships', 'shippings'));
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
        $validator = $request->validate(['fee' => ['required', 'min:3', 'max:100', 'unique:shippings']]);
        $fee=$request->fee;
        $townshipsid=$request->townshipsid;
        $shipping=new Shipping();
        $shipping->fee=$fee;
        $shipping->township_id=$townshipsid;
        $shipping->save();
        return redirect()->route('shipping.index')->with('successMsg','New Shipping is ADDED in your data.'); 
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
        $townships =Township::all();
        $shipping=Shipping::find($id);
        return view('backend.shipping.edit',compact('shipping','townships'));
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
        $fee=$request->fee;
        $townshipsid=$request->townshipsid;
        $shipping=Shipping::find($id);
        $shipping->fee=$fee;
        $shipping->township_id=$townshipsid;    
        $shipping->save();
        return redirect()->route('shipping.index')->with('successMsg','Existing Shiping is UPDATED in your data.');
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
        $shipping=Shipping::find($id);
        $shipping->delete();
        return redirect()->route('shipping.index')->with('successMsg','Existing Genre is DELETED in your data.');
    }
}
