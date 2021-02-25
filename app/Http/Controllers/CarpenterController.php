<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carpenter;
// use App\Models\Item;
use Spatie\Permission\Models\Role;

class CarpenterController extends Controller
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
        $carpenters =Carpenter::all();
        // $items =Item::all();
        return view('backend.carpenter.list',compact('carpenters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $carpenters=Carpenter::all();
         // $items=Item::all();

         return view('backend.carpenter.new',compact('carpenters'));
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
        $validator = $request->validate(['name' => ['required', 'min:3', 'max:100', 'unique:carpenters']]);
        $carpenter = new Carpenter();
        $name = $request->name;
        $phone = $request->phone;
        $itemsid=$request->itemsid;
        
        $carpenter = new Carpenter();
        $carpenter->name=$name;
        $carpenter->phone=$phone;
        // $carpenter->item_id=$itemsid;
        $carpenter->save();

        return redirect()->route('carpenter.index')->with('successMsg', 'New Carpenter is Added in your data.');

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
        $carpenter=Carpenter::find($id);
        // $items=Item::all();
        return view('backend.carpenter.edit',compact('carpenter'));
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
        $name = $request->name;
        $phone = $request->phone;
        // $itemsid=$request->itemsid;
        $carpenter = Carpenter::find($id);
        $carpenter->name=$name;
        $carpenter->phone=$phone;
        // $carpenter->item_id=$itemsid;
        $carpenter->save();

        return redirect()->route('carpenter.index')->with('successMsg', 'Existing Carpenter is Updated in your data.');
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
        $carpenter=Carpenter::find($id);
        $carpenter->delete();
        return redirect()->route('carpenter.index')->with('successMsg','Existing Carpenter is DELETED in your data.');
    }
}
