<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\Member;
use Illuminate\Support\Facades\File;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function members()
    {
        $members = Member::paginate(10);
        return view('Admin.Members.members', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Members.create_members');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMemberRequest $request)
    {
        $request->validated();
        $data = $request->only(['name', 'position', 'facebook', 'twitter', 'linkedin']);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('uploads/members'), $imageName);
            $data['image'] = $imageName;
        }

        Member::create($data);

        return redirect()->route('admin-members')->with('success', __('keywords.Member created successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        return view('Admin.Members.show_members', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        return view('Admin.Members.edit_members', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMemberRequest $request, Member $member)
    {
        $member->name     = $request->name;
        $member->position = $request->position;
        $member->facebook = $request->facebook;
        $member->twitter  = $request->twitter;
        $member->linkedin = $request->linkedin;

        if ($request->hasFile('image')) {
            $oldImage = public_path('uploads/members/' . $member->image);
            if (File::exists($oldImage)) {
                File::delete($oldImage);
            }

            $file     = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/members'), $filename);

            $member->image = $filename;
        }
        $member->save();

        // ✅ الرجوع برسالة نجاح
        return redirect()->route('admin-members')->with('success', __('keywords.Member updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        $member->delete();
        return redirect()->route('admin-members')->with('success', __('keywords.Member deleted successfully'));
    }
}
