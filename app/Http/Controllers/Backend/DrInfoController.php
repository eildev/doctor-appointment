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
      if ($request->dr_image) {
        $ImageName = rand() . '.' . $request->dr_image->extension();
        $request->dr_image->move(public_path('uploads/dr_image'), $ImageName);
        $dr_info = new DrInfo;
        $dr_info->dr_id = $request->dr_id;
        $dr_info->name = $request->dr_name;
        $dr_info->specialization = $request->dr_specialization;
        $dr_info->qualification = $request->dr_qualification;
        $dr_info->experience_years = $request->dr_experience;
        $dr_info->bio = $request->dr_bio;
        $dr_info->dr_facebook = $request->dr_facebook;
        $dr_info->dr_twitter = $request->dr_twitter;
        $dr_info->dr_instragram = $request->dr_instragram;
        $dr_info->other_link = $request->other_link;
        $dr_info->dr_image = $ImageName;
        $dr_info->save();
        $notification = array(
            'message' => 'Dr Info Successfully Saved',
                'alert-type' => 'info'
            );
      return redirect()->route('view.dr.info')->with($notification);
        }
   else{
        $dr_info = new DrInfo;
        $dr_info->dr_id = $request->dr_id;
        $dr_info->name = $request->dr_name;
        $dr_info->specialization = $request->dr_specialization;
        $dr_info->qualification = $request->dr_qualification;
        $dr_info->experience_years = $request->dr_experience;
        $dr_info->bio = $request->dr_bio;
        $dr_info->dr_facebook = $request->dr_facebook;
        $dr_info->dr_twitter = $request->dr_twitter;
        $dr_info->dr_instragram = $request->dr_instragram;
        $dr_info->other_link = $request->other_link;
        $dr_info->save();
        $notification = array(
            'message' => 'Dr Info Successfully Saved',
                'alert-type' => 'info'
            );
      return redirect()->route('view.dr.info')->with($notification);
   }
      
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
        if($request->dr_image){
            $ImageName = rand() . '.' . $request->dr_image->extension();
            $request->dr_image->move(public_path('uploads/dr_image'), $ImageName);
            $path = public_path('uploads/dr_image/').$dr_info->dr_image;
            if(file_exists($path)){
                @unlink($path);
            }
           $dr_info = DrInfo::findOrFail($id);
            $dr_info->dr_id = $request->dr_id;
            $dr_info->name = $request->dr_name;
            $dr_info->specialization = $request->dr_specialization;
            $dr_info->qualification = $request->dr_qualification;
            $dr_info->experience_years = $request->dr_experience;
            $dr_info->bio = $request->dr_bio;
            $dr_info->dr_facebook = $request->dr_facebook;
            $dr_info->dr_twitter = $request->dr_twitter;
            $dr_info->dr_instragram = $request->dr_instragram;
            $dr_info->other_link = $request->other_link;
            $dr_info->dr_image = $ImageName;
            $dr_info->save();
            $notification = array(
                'message' => 'Dr Info Successfully Updated',
                    'alert-type' => 'info'
                );
          return redirect()->route('view.dr.info')->with($notification);

        }
        else{
            $dr_info = DrInfo::findOrFail($id);
            $dr_info->dr_id = $request->dr_id;
            $dr_info->name = $request->dr_name;
            $dr_info->specialization = $request->dr_specialization;
            $dr_info->qualification = $request->dr_qualification;
            $dr_info->experience_years = $request->dr_experience;
            $dr_info->bio = $request->dr_bio;
            $dr_info->dr_facebook = $request->dr_facebook;
            $dr_info->dr_twitter = $request->dr_twitter;
            $dr_info->dr_instragram = $request->dr_instragram;
            $dr_info->other_link = $request->other_link;
            $dr_info->update();
            return redirect()->route('view.dr.info')->with('message', 'Dr Info Successfully Without Image updated');
        }
        
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
