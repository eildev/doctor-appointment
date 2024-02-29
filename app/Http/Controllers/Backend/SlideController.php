<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class SlideController extends Controller
{
   public function SliderAdd(){
    return view('backend.home_slider.insert');
   }//End Method 
   public function StoreSlider(Request $request){
    if ($request->slider_image) {
        $ImageName = rand() . '.' . $request->slider_image->extension();
        $request->slider_image->move(public_path('uploads/slider_image'), $ImageName);
         HomeSlider::insert([
        'dr_id' => Auth::user()->id,
        'short_caption' => $request->short_caption,
     'long_caption' => $request->long_caption,
        'slider_links' => $request->slider_links,
        'slider_image' =>  $ImageName,
        'created_at' => Carbon::now(),
    ]);
    $notification = array(
        'message' => 'Slider Inserted Successfully',
        'alert-type' => 'info'
    );
    return redirect()->route('slider.view')->with($notification);
   }//End Method
}
    public function ViewSlider(){
        $sliders = HomeSlider::all();
        return view('backend.home_slider.view',compact('sliders'));
    }//
    public function EditSlider($id){
        $sliders = HomeSlider::findOrFail($id);
        return view('backend.home_slider.edit',compact('sliders'));
    }//
    public function UpdateSlider(Request $request,$id){
       $sliderIamge=  HomeSlider::findOrFail($id);
        if ($request->slider_image) {
            $ImageName = rand(). '.'. $request->slider_image->extension();
            $request->slider_image->move(public_path('uploads/slider_image'), $ImageName);
            $path = public_path('uploads/slider_image/').$sliderIamge->slider_image;
            if(file_exists($path)){
                @unlink($path);
            }
            HomeSlider::findOrFail($id)->update([
              'short_caption' => $request->short_caption,
                'long_caption' => $request->long_caption,
              'slider_links' => $request->slider_links,
              'slider_image' =>  $ImageName,
                'updated_at' => Carbon::now(),
            ]);
            $notification = array(
              'message' => 'Slider Updated Successfully',
                'alert-type' => 'info'
            );
            return redirect()->route('slider.view')->with($notification);
        }else{
            HomeSlider::findOrFail($id)->update([
                'short_caption' => $request->short_caption,
                  'long_caption' => $request->long_caption,
                'slider_links' => $request->slider_links,
                  'updated_at' => Carbon::now(),
              ]);
              $notification = array(
                'message' => 'Slider Updated Without Image Successfully',
                  'alert-type' => 'info'
              );
              return redirect()->route('slider.view')->with($notification);
        }//End Method
    }//End Method
    public function DeleteSlider($id){
        $sliderIamge = HomeSlider::findOrFail($id);
        $path = public_path('uploads/slider_image/').$sliderIamge->slider_image;
        if (file_exists($path)) {
            @unlink($path);
        }
        HomeSlider::findOrFail($id)->delete();
        $notification = array(
         'message' => 'Slider Deleted Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('slider.view')->with($notification);
    }//End Method
}
