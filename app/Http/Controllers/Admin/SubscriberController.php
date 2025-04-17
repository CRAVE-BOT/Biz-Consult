<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoresubscriberRequest;
use App\Http\Requests\UpdatesubscriberRequest;
use App\Models\Subscriber;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function subscribers()
    {
        $subscribers=Subscriber::latest()->paginate(10);
        return view('Admin.Subscribers.subscribers',compact('subscribers'));
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
    public function store(StoresubscriberRequest $request)
    {
        $subscriber=$request->validated();
        $save=Subscriber::create($subscriber);
        if($save){
            return redirect()->route('home')->with('success','Subscribed Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(subscriber $subscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(subscriber $subscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatesubscriberRequest $request, subscriber $subscriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscriber $subscriber)
    {
        $subscriber->delete();
        return redirect()->route('admin-subscribers')->with('success','Subscriber Deleted Successfully');
    }
}
