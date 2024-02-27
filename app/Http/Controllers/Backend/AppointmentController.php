<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
class AppointmentController extends Controller
{
 public function AllAppointment(){
    $appointment = Appointment::all();
     return view('backend.appointment.all-appointment',compact('appointment'));
 }//
 public function AppointmentApprove($id){
    $appointment = Appointment::find($id);
    $appointment->status = 'confirmed';
    $appointment->save();
    return redirect()->back()->with('message','Appointment Approved Successfully');

 }//
 public function AppointmentCancel($id){
    $appointment = Appointment::find($id);
    $appointment->status = 'cancelled';
    $appointment->save();
    return redirect()->back()->with('message','Appointment Canceled Successfully');

 }//
 public function AppointmentDelete($id){
    $appointment = Appointment::find($id);
    $appointment->delete();
    return redirect()->back()->with('message','Appointment Deleted Successfully');
 }


 }

