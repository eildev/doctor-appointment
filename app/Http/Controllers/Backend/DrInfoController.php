<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\DrInfo;
use Illuminate\Http\Request;

class DrInfoController extends Controller
{
    public function index()
    {
        return view('backend.dr-info.insert');
    }
    public function store(Request $request)
    {
        // dd($request->all());

        // $request->validate([
        //     'name' => 'required|max:150',
        //     'specialization' => 'required|max:250',
        //     'qualification' => 'required|max:250',
        //     'experience_years' => 'required|max:11',
        //     'bio' => 'required|max:2500',
        // ]);

        $dr_info = new DrInfo;
        $dr_info->dr_id = $request->dr_id;
        $dr_info->name = $request->dr_name;
        $dr_info->specialization = $request->dr_specialization;
        $dr_info->qualification = $request->dr_qualification;
        $dr_info->experience_years = $request->dr_experience;
        $dr_info->bio = $request->dr_bio;
        $dr_info->save();
        return back()->with('message', 'Dr Info Successfully Saved');
    }
    public function view()
    {
        $allData = DrInfo::all();
        return view('backend.dr-info.view', compact('allData'));
    }
    public function edit($id)
    {
        // $data = SocialIcon::findOrFail($id);
        // return view('backend.social.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        // $social = SocialIcon::findOrFail($id);
        // $social->name = $request->name;
        // $social->link = $request->link;
        // $social->update();
        // return redirect()->route('manage.social.icon')->with('success', 'social icon Successfully updated');
    }

    public function delete($id)
    {
        // $social = SocialIcon::findOrFail($id);
        // $social->delete();
        // return back()->with('success', 'Social icon Successfully deleted');
    }
    public function status($id)
    {
        // $social = SocialIcon::findOrFail($id);
        // if ($social->status == 0) {
        //     $newStatus = 1;
        // } else {
        //     $newStatus = 0;
        // }

        // $social->update([
        //     'status' => $newStatus
        // ]);
        // return redirect()->back()->with('message', 'status changed successfully');
    }
}
