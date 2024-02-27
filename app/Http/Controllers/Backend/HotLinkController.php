<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HotLink;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
class HotLinkController extends Controller
{
    public function AddHotLink(){
        return view('backend.hot_link.insert');
    }//End  Method
    public function StoreHotLink(Request $request){
        HotLink::insert([
            'dr_id' => Auth::user()->id,
            'title' => $request->title,
            'url' => $request->url,
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);
        $notification = [
            'message' => 'Hot Link Successfully Saved',
            'alert-type' => 'info'
        ];
        return redirect()->route('view.hot.link')->with($notification );
    }//End Method
    public function ViewHotLink(){
        $hot_links = HotLink::latest()->get();
        return view('backend.hot_link.view', compact('hot_links'));
    }//End Method

    public function EditHotLink($id){
        $hot_links = HotLink::findOrFail($id);
        return view('backend.hot_link.edit', compact('hot_links'));
    }//End Method
    public function UpdateHotLink(Request $request,$id){

        HotLink::findOrFail($id)->update([
            'title' => $request->title,
            'url' => $request->url,
            'description' => $request->description,
            'updated_at' => Carbon::now(),
        ]);
        $notification = [
            'message' => 'Hot Link Successfully Updated',
            'alert-type' => 'info'
        ];
        return redirect()->route('view.hot.link')->with($notification );
    }//
    public function DeleteHotLink($id){
        HotLink::findOrFail($id)->delete();
        $notification = [
           'message' => 'Hot Link Successfully Deleted',
            'alert-type' => 'info'
        ];
        return redirect()->route('view.hot.link')->with($notification );
    }//End Method

}
