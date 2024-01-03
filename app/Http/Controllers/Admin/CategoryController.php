<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    //
    public function MainIndex()
    {
      $categories = Category::get();
      return view('admin.categories.main_category.list', compact('categories'));
    }

    public function MainCreate(Request $request){
      $data['nav'] = "Category";
        if($request->isMethod('get')){
          $id = $request->id;
          if($request->id) {
              $id = decrypt($id);
          }
          $category = Category::find($id);
          $all_parent = Category::where('parent_id', 0)->get();
          $data['category'] = $category;
          $data['all_parent'] = $all_parent;
          return view('admin.categories.main_category.create',$data);
        } else {
          //dd($request->all());
          $category = Category::findOrNew($request->id);
          $validated = $request->validate([
            'name' => 'required',
          ]);
          if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/category'), $imageName);
            $category->image = $imageName;
          }

          if($request->hasFile('icon')){
            $request->validate([
              'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = time().'.'.$request->icon->extension();
            $request->icon->move(public_path('uploads/category'), $imageName);
            $category->icon = $imageName;
          }
          
          $category->name = $request->name;
          $category->slug = $request->slug == '' ? Str::slug($request->name) : $request->slug;
          $category->parent_id = $request->parent_id;
          $category->description = $request->description;
          $category->status = $request->status;
          $category->sort_order = $request->sort_order ? $request->sort_order : 0;
          $category->save();
          return redirect()->route('admin_categories_main_list')->with('success_message', 'Category saved successfully!');        
        }
    }

    public function MainDelete(Request $request) {
      $category = Category::find($request->id);
      if($category) {
        $category->delete();
      }
      return response()->json(['message'=>'Category Deleted Successfully'], 200);
    }

    public function SubIndex()
    {
      return view('admin.categories.sub_category.list');
    }
}