<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategory;
use App\Category;




class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = Subcategory::all();

        return view('backend.subcategories.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('backend.subcategories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        // Validation
        $request->validate([
            
            'name'=> 'required',
            
            'category'=>'required'



        ]);

        // // If indlude file, upload
        // $imageName = time().'.'.$request->photo->extension();

        // $request->photo->move(public_path('backend/itemimg'),$imageName);

        // $myfile = 'backend/itemimg/'.$imageName;

        //Data insert
        $subcategory=new Subcategory;
       
        $subcategory->name=$request->name;
        
        $subcategory->category_id=$request->category;

        $subcategory->save();



        // Redirect
        return redirect()->route('subcategories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.subcategories.show');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories= Category::all();

        $subcategory=Subcategory::find($id);

        return view('backend.subcategories.edit',compact('categories','subcategory'));
        
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
        // dd($request);

        //validation

        $request->validate([
            
            'name'=> 'required',
            
            'category'=>'required',
           


        ]);

        
    

        //data update
        $subcategory=Subcategory::find($id);
        
        $subcategory->name=$request->name;
        
        $subcategory->category_id=$request->category;
   

        $subcategory->save();

        //redirect
        return redirect()->route('subcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory =Subcategory::find($id);
        $subcategory->delete();
        //redirect
        return redirect()->route('subcategories.index');
    }
}
