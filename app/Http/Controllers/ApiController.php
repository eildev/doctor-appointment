<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\DrInfo;
use App\Models\Homeslider;
class ApiController extends Controller
{

    // public function GetCategoryInfo($dr_id){
    //     $categories = Category::where('dr_id', $dr_id)->get();
    //     return response()->json([
    //         'status' => 200,
    //         'categories' => $categories
    //     ]);
    // }
    // public function GetDoctorInfo($dr_id){
    //     $drInfo = DrInfo::where('dr_id', $dr_id)->get();
    //     return response()->json([
    //         'status' => 200,
    //         'drInfo' => $drInfo
    //     ]);
    // }
    public function GetSliderInfo($dr_id){
        $sliderInfo = Homeslider::where('dr_id', $dr_id)->get();
        return response()->json([
            'status' => 200,
            'sliderInfo' => $sliderInfo
        ]);
    }//End Home Slider
}
