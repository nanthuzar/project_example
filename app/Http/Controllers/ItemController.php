<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use Spatie\Permission\Models\Role;

class ItemController extends Controller
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
        $items = Item::latest()->get();
        $categories = Category::all();

        return view('backend.item.list', compact('items','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $items = Item::all();
        $categories = Category::all();
        return view('backend.item.new',compact('items','categories'));
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
        $codeno = $request->codeno;
        $name = $request->name;
        $price = $request->price;
        $description = $request->description;
        $categoriesid = $request->categoriesid;
        $photo = $request->photo;

        $imageName = time().'.'.$photo->extension();
        $photo->move(public_path('storage/itemphoto/'),$imageName);
        $photo_filepath='/storage/itemphoto/'.$imageName;
        //dd($photo_filepath);

        $item = new Item();
        $item->codeno = $codeno;
        $item->name = $name;
        $item->price = $price;
        $item->photo = $photo_filepath;
        $item->description = $description;
        $item->category_id = $categoriesid;
        $item->save();

        // $item->categories()->attach($categoriesid);

        return redirect()->route('item.index')->with('successMsg','New Item is ADDED in your data');
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
        $item = Item::find($id);
        $categories = Category::all();
        return view('backend.item.edit',compact('item','categories'));
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
        $codeno = $request->codeno;
        $name = $request->name;
        $price = $request->price;
        $description = $request->description;
        $categoryid = $request->categoryid;

        $oldphoto = $request->oldphoto;
        $newphoto = $request->photo;

        if ($request->hasfile('photo')) {
            if(\File::exists(public_path($oldphoto))){
                \File::delete(public_path($oldphoto));
            }

            // Photo File Upload
            $imageName = time().'.'.$newphoto->extension();
            $newphoto->move(public_path('storage/itemphoto/'),$imageName);
            $photo_filepath = '/storage/itemphoto/'.$imageName;
        }else{
            $photo_filepath = $oldphoto;
        }

        $item = Item::find($id);
        $item->codeno = $codeno;
        $item->name = $name;
        $item->price = $price;
        $item->description = $description;
        $item->category_id = $categoryid;
        $item->photo = $photo_filepath;
        $item->save();

        return redirect()->route('item.index')->with('successMsg','New Book is ADDED in your data.');
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
        $item = Item::find($id);
        $item->delete();

        return redirect()->route('item.index')->with('successMsg', 'Existing Item:'.$item->name.'is DELETED from your data.');
    }
}
