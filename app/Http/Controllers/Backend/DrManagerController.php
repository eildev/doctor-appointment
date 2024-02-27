<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DrManagerController extends Controller
{
    public function view()
    {
        $allData = User::latest()->get();
        return view('backend.dr-manager.view', compact('allData'));
    }
}
