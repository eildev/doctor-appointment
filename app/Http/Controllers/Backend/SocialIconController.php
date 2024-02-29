<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialIcon;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class SocialIconController extends Controller
{
    public function index(){
        return view('backend.social.insert');
    }
    public function store(Request $request)
    {

        $social = new SocialIcon;
        $social->dr_id = Auth::user()->id;
        $social->platform_name = $request->platform_name;
        $social->other_link = $request->other_link;
        $social->facebook = $request->facebook;
        $social->instragram = $request->instragram;
        $social->linkdin = $request->linkdin;
        $social->twitter = $request->twitter;
        $social->created_at = Carbon::now();

        $social->save();
        $notification = [
            'message' => 'social icon Successfully Saved',
            'alert-type' => 'info'
        ];
        return redirect()->route('manage.social.icon')->with($notification );
    }
    public function view()
    {
        $allData = SocialIcon::all();
        return view('backend.social.view', compact('allData'));
    }
    public function edit($id)
    {
        $data = SocialIcon::findOrFail($id);
        return view('backend.social.edit', compact('data'));
    }
    public function update(Request $request,$id)
    {
        $social = SocialIcon::findOrFail($id);
        $social->platform_name = $request->platform_name;
        $social->other_link = $request->other_link;
        $social->facebook = $request->facebook;
        $social->instragram = $request->instragram;
        $social->linkdin = $request->linkdin;
        $social->twitter = $request->twitter;
        $social->updated_at = Carbon::now();

        $social->update();
        $notification = [
            'message' => 'social icon Successfully Updated',
            'alert-type' => 'info'
        ];
        return redirect()->route('manage.social.icon')->with($notification );
    }

     public function delete($id)
     {
        $social = SocialIcon::findOrFail($id);
        $social->delete();
        return back()->with('success', 'Social icon Successfully deleted');
     }
     public function status($id)
     {
        $social = SocialIcon::findOrFail($id);
        if ($social->status == 0) {
            $newStatus = 1;
        } else {
            $newStatus = 0;
        }

        $social->update([
            'status'=>$newStatus
        ]);
        return redirect()->back()->with('message', 'status changed successfully');
     }
}
