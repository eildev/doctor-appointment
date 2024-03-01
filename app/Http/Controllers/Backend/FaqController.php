<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
use Illuminate\Support\Facades\Auth;
class FaqController extends Controller
{
    public function AddFaq(){
        return view('backend.faq.insert');
    }
    public function StoreFaq(Request $request){
        Faq::insert([
            'dr_id' => Auth::user()->id,
            'question' => $request->question,
            'answer' => $request->answer
        ]);
        $notification = array(
          'message' =>'Faq Insert Successfully',
            'alert-type'=> 'info'
        );
        return redirect()->route('faq.view')->with($notification);
    }//?End Method
    public function FaqView(){
        $faqs = Faq::all();
        return view('backend.faq.view',compact('faqs'));
    }
    public function FaqEdit($id){
        $faqs = Faq::findOrFail($id);
        return view('backend.faq.edit',compact('faqs'));
    }
    public function FaqUpdate(Request $request,$id){
        Faq::findOrFail($id)->update([
            'question' => $request->question,
            'answer' => $request->answer
        ]);
        $notification = array(
          'message' =>'Faq Updated Successfully',
            'alert-type'=> 'info'
        );
        return redirect()->route('faq.view')->with($notification);

    }
    public function FaqDelete($id){
        Faq::findOrFail($id)->delete();
        $notification = array(
         'message' =>'Faq Deleted Successfully',
            'alert-type'=> 'info'
        );
        return redirect()->route('faq.view')->with($notification);
    }
}
