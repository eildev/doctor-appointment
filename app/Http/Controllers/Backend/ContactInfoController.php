<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactInfo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
class ContactInfoController extends Controller
{
    public function AddContactInfo(){
        return  view('backend.contact_info.insert');
    }

    public function StoreContactInfo(Request $request){
        ContactInfo::insert([
            'dr_id' => Auth::user()->id,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'opening_hours' => $request->opening_hours,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
          'message' => 'Contact Info Added Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('view.contact.info')->with($notification);
    }//End Method
    public function ViewContactInfo(){
        $contact_info = ContactInfo::all();
        return view('backend.contact_info.view',compact('contact_info'));
    }//End Method
    public function EditContactInfo($id){
        $contact_info = ContactInfo::findOrFail($id);
        return view('backend.contact_info.edit',compact('contact_info'));
    }//End Method
    public function UpdateContactInfo(Request $request,$id){
        ContactInfo::findOrFail($id)->update([
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'opening_hours' => $request->opening_hours,
            'updated_at' => Carbon::now(),
        ]);
        $notification = array(
         'message' => 'Contact Info Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('view.contact.info')->with($notification);
    }//End Method
    public function DeleteContactInfo($id){
        ContactInfo::findOrFail($id)->delete();
        $notification = array(
        'message' => 'Contact Info Deleted Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('view.contact.info')->with($notification);
    }//End Method

}
