<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function AddReview(){
        return view('backend.review.insert');
    }//End
    public function StoreReview(Request $request){
        $review = new Review;
        $review->dr_id = Auth::user()->id;
        $review->patient_name = $request->patient_name;
        $review->rating = $request->stars;
        $review->comment = $request->comment;
        $review->date = $request->date;
        $review->save();
        $notification = array(
            'message' => 'Review Inserted Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('view.review')->with($notification);
    }//End
    public function ViewReview(){
        $review = Review::all();
        return view('backend.review.view',compact('review'));
    }//End
    public function EditReview($id){
        $review = Review::findOrFail($id);
        return view('backend.review.edit',compact('review'));
    }//End
    public function UpdateReview(Request $request,$id){
        Review::findOrFail($id)->update([
            'patient_name' => $request->patient_name,
            'rating' => $request->stars,
            'comment' => $request->comment,
            'date' => $request->date,
        ]);
        $notification = array(
          'message' => 'Review Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('view.review')->with($notification);
    }//End
    public function DeleteReview($id){
        Review::findOrFail($id)->delete();
        $notification = array(
           'message' => 'Review Deleted Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('view.review')->with($notification);
    }//End
}
