<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    // index page
    public function services(){
        $services = Service::latest()->paginate(4);
        return view('Admin.Services.services',compact('services'));
    }
    //  create new services
    public function create(){
        return view('Admin.Services.create_services');
    }

    // Save the new service in db
    public function store(ServiceRequest $request){
       $service=$request->validated();
        Service::create($service);
        return redirect()->route('admin-services')->with('success', __('keywords.Service success created'));
    }

    // page edit the sevices
    public function edit($id){
        $service=Service::where('title',$id)->first();
        return view('Admin.Services.edit_services',compact('service'));
    }

      // update service in db
    public function update(Request $request,$id){
        $request->validate([
            'title'=>'required|string|max:100',
            'description'=>'required|string|',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $service=Service::where('title',$id)->first();
        $service->update([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
        ]);
        return redirect()->route('admin-services')->with('success', __('keywords.Service success updated'));
    }

    // show the content of specific service
     public  function show($id)
     {
         $service=Service::where('title',$id)->first();
         return view('Admin.Services.show_services',compact('service'));
     }

     //delete the services
     public function destroy($id){
        $service=Service::where('title',$id)->delete();
        return redirect()->route('admin-services')->with('success', __('keywords.Service success deleted'));

    }
}
