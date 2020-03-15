<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Description;
use Session;

class DescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $book = Book::where('id', $id)->with('description')->first();
        return view('description.index')->with('book', $book);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'description' => 'required| min:25'
        ]);
        // create -> method available in laravel to create new record
        Description::create([
            'book_id' => $id,
            "description" => $request->description
        ]);
        // ->save() // we don't need them

        Session::flash('success', 'Description created successfully');
        return redirect()->back();
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
        $des = Description::find($id);
        return view('description.edit')->with('des', $des);
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
        $this->validate($request, [
            'description' => 'required| min:25'
        ]);
        $des = Description::find($id);
        $des->description = $request->description;
        $des->save();
        Session::flash('success', 'Description edited successfully');
        return redirect()->back();
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
