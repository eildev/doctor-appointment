<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function CategoryAdd(){
        return view('backend.category.insert');
    }//End Method
    public function StoreCategory(Request $request){
        $request->validate([
            'category_name' => 'required',
            'description' => 'required',
        ]);
        Category::insert([
            'category_name' => $request->category_name,
            'description' => $request->description,
            'dr_id' => Auth::user()->id,
        ]);
        $notification = array(
            'message' =>'Category Insert Sccessfully',
            'alert-type'=> 'info'
         );
        return redirect()->route('category.view')->with($notification);
    }//End Method
    public function ViewCategory(){
        $category = Category::latest()->get();
        return view('backend.category.view',compact('category'));
    }//End Method
    public function EditCategory($id){
        $category = Category::findOrFail($id);
        return view('backend.category.edit',compact('category'));
    }//End Method
    public function UpdateCategory(Request $request,$id){
        $request->validate([
            'category_name' => 'required',
            'description' => 'required',
        ]);
        Category::findOrFail($id)->update([
            'category_name' => $request->category_name,
            'description' => $request->description,
        ]);
        $notification = array(
            'message' =>'Category Update Sccessfully',
            'alert-type'=> 'info'
         );
        return redirect()->route('category.view')->with($notification);
    }//End Method

    public function DeleteCategory($id){
        Category::findOrFail($id)->delete();
        $notification = array(
            'message' =>'Category Deleted Sccessfully',
            'alert-type'=> 'info'
         );
        return redirect()->route('category.view')->with($notification);
    }

}
