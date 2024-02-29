<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('backend.services.insert');
    } //End Method

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'service_image' => 'required',
        ]);
        if($request->service_image){
            $ImageName = rand() . '.' . $request->service_image->extension();
           $request->service_image->move(public_path('uploads/service_image'), $ImageName);
            Service::insert([
                'dr_id' => $request->dr_id,
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'service_image' =>  $ImageName,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Service Insert Successfully',
                'alert-type' => 'info'
            );
            return redirect()->route('service.view')->with($notification);
        }
     
    } //End Method
    public function view()
    {
        $services = Service::latest()->get();
        return view('backend.services.view', compact('services'));
    } //End Method
    public function edit($id)
    {
        $services = Service::findOrFail($id);
        return view('backend.services.edit', compact('services'));
    } //End Method
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
           
        ]);
        $services=  Service::findOrFail($id);
        if ($request->service_image) {
            $ImageName = rand() . '.' . $request->service_image->extension();
           $request->service_image->move(public_path('uploads/service_image'), $ImageName);
            $path = public_path('uploads/service_image/').$services->service_image;
            if(file_exists($path)){
                @unlink($path);
            }
            Service::findOrFail($id)->update([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'service_image' =>  $ImageName,
                'updated_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Service Updated With Image Successfully',
                'alert-type' => 'info'
            );
            return redirect()->route('service.view')->with($notification);
        }else{
            $request->validate([
                'name' => 'required',
                'description' => 'required',
                'price' => 'required',
               
            ]);
            Service::findOrFail($id)->update([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'updated_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Service Updated Successfully',
                'alert-type' => 'info'
            );
            return redirect()->route('service.view')->with($notification);
        }//End Method

        ////


       
    } //End Method
    public function delete($id)
    {
        Service::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Service Deleted Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('service.view')->with($notification);
    }
}
