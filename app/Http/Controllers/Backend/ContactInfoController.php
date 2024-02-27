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
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
          'message' => 'Contact Info Added Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

}
