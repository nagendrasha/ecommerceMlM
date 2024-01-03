<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manufacturer;

class ManufacturerController extends Controller
{
    //
    public function index()
    {
        $manufacturers = Manufacturer::get();
        return view('admin.products.manufacturer.manufacturer', compact('manufacturers'));
    }

    public function Create(Request $request) {
        $data['nav'] = "Manufacturer";
        if($request->isMethod('get')){
            $id = $request->id;
            if($request->id) {
                $id = decrypt($id);
            }
            $manufacturer = Manufacturer::find($id);
            $data['manufacturer'] = $manufacturer;
            return view('admin.products.manufacturer.create',$data);
        } else {
            $manufacturer = Manufacturer::findOrNew($request->id);
            $validated = $request->validate([
                'name' => 'required',
                'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                'email' => 'required|unique:manufacturers,email,'.$manufacturer->id,
            ]);
            if($request->hasFile('image')){
                $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('uploads/manufacturer'), $imageName);
                $manufacturer->image = $imageName;
            }
            
            $manufacturer->name = $request->name;
            $manufacturer->phone = $request->phone;
            $manufacturer->email = $request->email;
            $manufacturer->address = $request->address;
            $manufacturer->status = $request->status;
            if($manufacturer->save()) {
                return redirect()->route('admin_manufacturer_manufacturer')->with('success_message', 'Manufacturer saved successfully!');
            }
        }
    }

    public function Delete(Request $request) {
        $manufacturer = Manufacturer::find($request->id);
        if($manufacturer) {
          $manufacturer->delete();
        }
        return response()->json(['message'=>'Manufacturer Deleted Successfully'], 200);
      }
}