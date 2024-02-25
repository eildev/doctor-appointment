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
        $data = DrInfo::findOrFail($id);
        return view('backend.dr-info.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $dr_info = DrInfo::findOrFail($id);
        $dr_info->dr_id = $request->dr_id;
        $dr_info->name = $request->dr_name;
        $dr_info->specialization = $request->dr_specialization;
        $dr_info->qualification = $request->dr_qualification;
        $dr_info->experience_years = $request->dr_experience;
        $dr_info->bio = $request->dr_bio;
        $dr_info->update();
        return redirect()->route('view.dr.info')->with('message', 'Dr Info Successfully updated');
    }

    public function delete($id)
    {
        $dr_info = DrInfo::findOrFail($id);
        $dr_info->delete();
        return back()->with('message', 'Dr Info Successfully deleted');
    }
    // public function status($id)
    // {
    //     $dr_info = DrInfo::findOrFail($id);
    //     if ($dr_info->status == 0) {
    //         $newStatus = 1;
    //     } else {
    //         $newStatus = 0;
    //     }

    //     $dr_info->update([
    //         'status' => $newStatus
    //     ]);
    //     return redirect()->back()->with('message', 'Status Changed Successfully');
    // }
}
