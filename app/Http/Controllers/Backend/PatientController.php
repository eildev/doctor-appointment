<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        return view('backend.patient.insert');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'patient_name' => 'required|max:150',
            'mobile' => 'required|max:15',
            'email' => 'required|max:250',
            'address' => 'required',
        ]);
        Patient::insert([
            'dr_id' => $request->dr_id,
            'patient_name' => $request->patient_name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'address' => $request->address,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Patient Insert Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('patient.view')->with($notification);
    }
    public function view()
    {
        $allData = Patient::latest()->get();
        return view('backend.patient.view', compact('allData'));
    }
    public function edit($id)
    {
        $data = Patient::findOrFail($id);
        return view('backend.patient.edit', compact('data'));
    } //End Method
    public function update(Request $request, $id)
    {
        $request->validate([
            'patient_name' => 'required|max:150',
            'mobile' => 'required|max:15',
            'email' => 'required|max:250',
            'address' => 'required',
        ]);
        Patient::findOrFail($id)->update([
            'dr_id' => $request->dr_id,
            'patient_name' => $request->patient_name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'address' => $request->address,
            'updated_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Patient Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('patient.view')->with($notification);
    } //End Method

    public function delete($id)
    {
        Patient::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Patient Deleted Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('patient.view')->with($notification);
    }
}
