<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Http\Requests\StoreFeatureRequest;
use App\Http\Requests\UpdateFeatureRequest;
use App\Models\Feature;
use App\Models\Service;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function features(){
        $features= Feature::latest()->paginate(4);
        return view('Admin.Features.features',compact('features'));
    }
    //  create new services
    public function create(){
        return view('Admin.Features.create_features');
    }

    // Save the new service in db
    public function store(StoreFeatureRequest $request){
        $service=$request->validated();
        Feature::create($service);
        return redirect()->route('admin-features')->with('success', __('keywords.Service success created'));
    }

    // page edit the sevices
    public function edit($id){
        $service=Feature::where('title',$id)->first();
        return view('Admin.Features.edit_features',compact('service'));
    }

    // update service in db
    public function update(Request $request,$id){
        $request->validate([
            'title'=>'required|string|max:100',
            'description'=>'required|string|',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $feature=Feature::where('title',$id)->first();
        $feature->update([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
        ]);
        return redirect()->route('admin-features')->with('success', __('keywords.Feature success updated'));
    }

    // show the content of specific service
    public  function show($id)
    {
        $service=Feature::where('title',$id)->first();
        return view('Admin.Features.show_features',compact('service'));
    }

    //delete the services
    public function destroy($id){
        $service=Feature::where('title',$id)->delete();
        return redirect()->route('admin-features')->with('success', __('keywords.Service success deleted'));

    }
}
