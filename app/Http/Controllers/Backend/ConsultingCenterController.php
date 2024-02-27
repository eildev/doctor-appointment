<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ConsultingCenter;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class ConsultingCenterController extends Controller
{
   public function AddConsultingCenter(){
    return view('backend.consulting_center.insert');
   }//End Method
   public function StoreConsultingCenter(Request $request) {
    ConsultingCenter::insert([
        'dr_id' => Auth::user()->id,
        'name' => $request->name,
        'address' => $request->address,
        'contact_email' => $request->contact_email,
        'contact_number' => $request->contact_number,
        'created_at' => Carbon::now(),
    ]);
    $notification = array(
       'message' => 'Consulting Center Insert Successfully',
        'alert-type' => 'info'
    );
    return redirect()->route('view.consulting.center')->with($notification);
   }//End Method
   public function ViewConsultingCenter(){
    $consulting_centers = ConsultingCenter::latest()->get();
    return view('backend.consulting_center.view', compact('consulting_centers'));
   }//End Method
   public function EditConsultingCenter($id){
    $consulting_centers = ConsultingCenter::findOrFail($id);
    return view('backend.consulting_center.edit', compact('consulting_centers'));
   }
   public function UpdateConsultingCenter(Request $request,$id){
       ConsultingCenter::findOrFail($id)->update([
        'name' => $request->name,
        'address' => $request->address,
        'contact_email' => $request->contact_email,
        'contact_number' => $request->contact_number,
        'updated_at' => Carbon::now(),
    ]);
    $notification = array(
      'message' => 'Consulting Center Update Successfully',
        'alert-type' => 'info'
    );
    return redirect()->route('view.consulting.center')->with($notification);

   }//End Method
   public function DeleteConsultingCenter($id){
    ConsultingCenter::findOrFail($id)->delete();
    $notification = array(
      'message' => 'Consulting Center Deleted Successfully',
        'alert-type' => 'info'
    );
    return redirect()->route('view.consulting.center')->with($notification);
   }//End Method
}//End
