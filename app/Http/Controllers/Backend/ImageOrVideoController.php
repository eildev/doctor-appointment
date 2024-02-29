<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ImageOrVideo;
use Illuminate\Support\Facades\Auth;
class ImageOrVideoController extends Controller
{
    public function AddImageOrVideo(){
        return view('backend.image_or_video.insert');
    }//
    public function StoreImageOrVideo(Request $request){
        if ($request->media_type) {
            $ImageName = rand() . '.' . $request->media_type->extension();
            $request->media_type->move(public_path('uploads/image_or_video/'), $ImageName);
            $imageOrVideo = new ImageOrVideo;
            $imageOrVideo->section_name = $request->section_name;
            $imageOrVideo->dr_id = Auth::user()->id;
            $imageOrVideo->media_type = $ImageName;
            $imageOrVideo->media_url = $request->media_url;
            $imageOrVideo->description = $request->description;
            $imageOrVideo->save();
            return redirect()->route('view.image.video')->with('message', 'Image Or Video Successfully Saved');
        }
    }//
    public function ViewImageOrVideo(){
        $allData = ImageOrVideo::all();
        return view('backend.image_or_video.view', compact('allData'));
    }//
    public function EditImageOrVideo($id){
        $data = ImageOrVideo::findOrFail($id);
        return view('backend.image_or_video.edit', compact('data'));
    }//

    public function UpdateImageOrVideo(Request $request, $id){
        $imageOrVideo = ImageOrVideo::findOrFail($id);
        if ($request->media_type) {
            $ImageName = rand(). '.'. $request->media_type->extension();
            $request->media_type->move(public_path('uploads/image_or_video/'), $ImageName);
            $path = public_path('uploads/image_or_video').$imageOrVideo->media_type;
            if(file_exists($path)){
                @unlink($path);
            }
            $imageOrVideo->section_name = $request->section_name;
            $imageOrVideo->media_type = $ImageName;
            $imageOrVideo->media_url = $request->media_url;
            $imageOrVideo->description = $request->description;
            $imageOrVideo->update();
            return redirect()->route('view.image.video')->with('message', 'Image Or Video Successfully Updated');
        }
        else{
            $imageOVideo = ImageOrVideo::findOrFail($id);
            $imageOVideo->section_name = $request->section_name;
            $imageOVideo->media_url = $request->media_url;
            $imageOVideo->description = $request->description;
            $imageOVideo->update();
            return redirect()->route('view.image.video')->with('message', 'Image Or Video Successfully Updated');
        }//


    }//
    public function DeleteImageOrVideo($id){
        $imageOrVideo = ImageOrVideo::findOrFail($id);
        $path = public_path('uploads/image_or_video/').$imageOrVideo->media_type;
        if(file_exists($path)){
            @unlink($path);
        }
        $imageOrVideo->delete();
        return redirect()->route('view.image.video')->with('message', 'Image Or Video Successfully Deleted');
    }
}
