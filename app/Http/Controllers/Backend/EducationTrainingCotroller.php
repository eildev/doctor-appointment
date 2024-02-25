<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EducationTraining;
use Illuminate\Support\Facades\Auth;

class EducationTrainingCotroller extends Controller
{
    public function AddEducationTraining(){
        return view('backend.education_training.insert');
    }//End Method
    public function StoreEducationTraining(Request $request){
        $request->validate([
            'institution_name' => 'required',
            'degree' => 'required',
            'start_year' => 'required',
            'end_year' => 'required',
        ]);
        $eduTrain = new EducationTraining;
        $eduTrain->institution_name = $request->institution_name;
        $eduTrain->degree = $request->degree;
        $eduTrain->start_year = $request->start_year;
        $eduTrain->end_year = $request->end_year;
        $eduTrain->dr_id = Auth::user()->id;
        $eduTrain->save();
        $notification = array(
            'message' =>'Edu & Training Sccessfully Saved',
            'alert-type'=> 'info'
         );
        return redirect()->route('view.education.training')->with($notification);
    }//End Method
    public function ViewEducationTraining(){
        $eduTrain = EducationTraining::latest()->get();
        return view('backend.education_training.view',compact('eduTrain'));
    }//end method
    public function EditEducationTraining($id){
        $eduTrain = EducationTraining::findOrFail($id);
        return view('backend.education_training.edit',compact('eduTrain'));
    }//end method
    public function UpdateEducationTraining(Request  $request,$id){
        $request->validate([
            'institution_name' => 'required',
            'degree' => 'required',
            'start_year' => 'required',
            'end_year' => 'required',
        ]);
        $eduTrain = EducationTraining::findOrFail($id);
        $eduTrain->institution_name = $request->institution_name;
        $eduTrain->degree = $request->degree;
        $eduTrain->start_year = $request->start_year;
        $eduTrain->end_year = $request->end_year;
        $eduTrain->update();
        $notification = array(
            'message' =>'Edu & Training Sccessfully Updated',
            'alert-type'=> 'info'
         );
        return redirect()->route('view.education.training')->with($notification);
    }//end function
    public function DeleteEducationTraining($id){
    $eduTrain = EducationTraining::findOrFail($id);
    $eduTrain->delete();
    $notification = array(
      'message' =>'Edu & Training Sccessfully Deleted',
        'alert-type'=> 'info'
     );
     return redirect()->route('view.education.training')->with($notification);
     }//end function
}
