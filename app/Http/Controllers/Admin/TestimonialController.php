<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function testimonials()
    {
        $testimonials = Testimonial::latest()->paginate(10);
        return view('Admin.Testimonials.testimonials', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Testimonials.create_testimonials');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestimonialRequest $request)
    {
        $request->validated();
        $data = $request->only(['name', 'position','description']);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('uploads/members'), $imageName);
            $data['image'] = $imageName;
        }

        Testimonial::create($data);
        return redirect()->route('admin-testimonials')->with('success', __('keywords.Testimonial added successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        return view('Admin.Testimonials.show_testimonials', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('Admin.Testimonials.edit_testimonials', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        $testimonial->name     = $request->name;
        $testimonial->position = $request->position;
        $testimonial->description = $request->description;

        if ($request->hasFile('image')) {
            $oldImage = public_path('uploads/members/' . $testimonial->image);
            if (File::exists($oldImage)) {
                File::delete($oldImage);
            }

            $file     = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/members'), $filename);

            $testimonial->image = $filename;
        }
        $testimonial->save();
        return redirect()->route('admin-testimonials')->with('success', __('keywords.Testimonial updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('admin-testimonials')->with('success', __('keywords.Testimonial deleted successfully'));
    }
}
