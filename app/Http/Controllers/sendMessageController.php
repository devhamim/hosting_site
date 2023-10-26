<?php

namespace App\Http\Controllers;

use App\Models\send_message;
use Carbon\Carbon;
use Illuminate\Http\Request;

class sendMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $send_messages = send_message::all();
        return view('backend.sendmessage.index', [
            'send_messages'=>$send_messages,
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
        send_message::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,
            'created_at'=>Carbon::now(),
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
        send_message::find($id)->delete();
        alert()->error('Delete successfully');
        return back();
    }
}
