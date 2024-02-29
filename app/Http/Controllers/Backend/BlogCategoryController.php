<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class BlogCategoryController extends Controller
{
    public function AddBlogCategory(){
        return view('backend.blog_category.insert');
        }//End Method
        public function StoreBlogCategory(Request $request){
            $request->validate([
                'CategoryName' => 'required',
            ]);
            BlogCategory::insert([
                'dr_id' => Auth::user()->id,
                'cat_name' => $request->CategoryName,
                'created_at'=> Carbon::now(),
            ]);
            $notification = array(
                'message' =>'Blog Category Successfully Added',
                'alert-type'=> 'info'
             );
        return redirect()->route('blog.all.category.view')->with($notification);
        }//End Method
        public function BlogAllCategoryView(){
            $blogCat = BlogCategory::latest()->get();
            return view('backend.blog_category.view',compact('blogCat'));
        }//End Method
        public function EditBlogCategory($id){
            $blogCatEdit = BlogCategory::findOrFail($id);
            return view('backend.blog_category.edit',compact('blogCatEdit'));
        }//End Method
        public function UpdateBlogCategory(Request $request,$id){
            $request->validate([
                'CategoryName' => 'required',
            ]);
            BlogCategory::findOrFail($id)->update([
                'cat_name' =>$request->CategoryName,
            ]);
            $notification = array(
                'message' =>'Blog Category Successfully Updated',
                'alert-type'=> 'info'
             );
            return redirect()->route('blog.all.category.view')->with($notification);
        }//End Method
        public function DeleteBlogCategory($id){
            BlogCategory::findOrFail($id)->delete();
            $notification = array(
                'message' =>'Blog Category Successfully Deleted',
                'alert-type'=> 'info'
             );
            return redirect()->route('blog.all.category.view')->with( $notification);
        }
    }