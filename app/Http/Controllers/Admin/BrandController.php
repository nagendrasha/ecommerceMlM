<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function listBrand(Request $request) {
        $data['nav'] = "Brand";
        $data['brands'] = Brand::get();
        return view('admin.brands.list', $data);
    }

    public function fetchSingle(Request $request) {
        $brand = Brand::find($request->id);
        return $brand;
    }

    public function saveBrand(Request $request) {
        $brand = Brand::findOrNew($request->id);
        $validated = $request->validate([
            'name' => 'required',
        ]);
        $brand->name = $request->name;
        if($request->hasFile('image')){
            $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = time().'.'.$request->image->extension();
            $path = 'uploads/brand';
            $request->image->move(public_path($path), $imageName);
            $brand->image = $path.'/'.$imageName;
        }
        if($brand->save()) {
            return redirect()->route('admin_brand_list')->with('success', 'Brand saved successfully!');
        } else {
            return redirect()->route('admin_brand_list')->with('error', 'Something went wrong!!');
        }
    }

    public function deleteBrand(Request $request) {
        $brand = Brand::find($request->id);
        if($brand) {
            $brand->delete();
        }
        return response()->json(['message'=>'Brand Deleted Successfully'], 200);
    }
}
