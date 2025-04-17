<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;
use App\Models\Message;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function messages()
    {
        $messages=Message::latest()->paginate(10);
        return view('Admin.Messages.messages',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMessageRequest $request)
    {
        $message=$request->validated();
        $save=Message::create($message);

        if($save){
          return to_route('contact')->with('success',('Message Send Successfully'));
        }
        return view('Theme.contact')->with('success','Message Send failed try again');



    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        return view('Admin.Messages.show_messages',compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     */



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('admin-messages')->with('success', __('keywords.Message success deleted'));
    }
}
