<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;
use Str;
use Image;

class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client_lists = client::all();
        return view('backend.client.client_say', [
            'client_lists'=>$client_lists,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            '*'=>'required',
        ]);

        $images = $request->image;
        $extension = $images->getClientOriginalExtension();
        $file_name = Str::random(5). rand(1000,999999).'.'.$extension;
        Image::make($images)->save(public_path('uplodes/client/'.$file_name));
        client::insert([
            'name'=>$request->name,
            'company'=>$request->company,
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$file_name,
        ]);
        alert()->success('Add successfully');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        client::find($id)->delete();
        alert()->error('Delete successfully');
        return back();
    }
}
