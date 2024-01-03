<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class BannerController extends Controller
{


    public $nav = "Banner";


    public function list($bannerType)
    {
        if (!$bannerType || !in_array($bannerType, ['four', 'six', 'twelve'])) {
            abort(404);
        }
        $navData = ['four' => 4, 'six' => 6, 'twelve' => 12];
        $data['nav'] = $navData[$bannerType] . " " . $this->nav;
        $data['category'] = $bannerType;
        $data['records'] = DB::table('banners')->where(['deleted' => 0, "category" => $navData[$bannerType]])->orderBy('sort', 'ASC')->get();
        return view('admin.other.banner.list', $data);
    }


    public function Create(Request $request, $bannerType)
    {
        if (!$bannerType || !in_array($bannerType, ['four', 'six', 'twelve'])) {
            abort(404);
        }
        $navData = ['four' => 4, 'six' => 6, 'twelve' => 12];
        $data['category'] = $bannerType;


        $data['nav'] = $navData[$bannerType] . " " . $this->nav;
        if ($request->isMethod('get')) {
            return view('admin.other.banner.create', $data);
        } else {

            $validated = $request->validate([
                'link' => 'nullable|url',
            ]);
            $values = $request->all();
            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/banner/' . $navData[$bannerType] . "/"), $imageName);
                $imgPath = "uploads/banner/" . $navData[$bannerType] . "/" . $imageName;
                unset($values['image']);
            } else {
                $imgPath = "";
            }

            $values['image'] = $imgPath;
            $values['sort'] = $request->sort ? $request->sort : 0;
            $values['category'] = $navData[$bannerType];
            if ($request->_token) {
                unset($values['_token']);
            }

            DB::table('banners')->insert($values);


            return redirect()->route('admin_banner_list', $data['category'])->with('success_message', 'Successfully Record Created');
        }
    }

    public function Edit(Request $request, $bannerType, $id)
    {

        if (!$bannerType || !in_array($bannerType, ['four', 'six', 'twelve'])) {
            abort(404);
        }
        $navData = ['four' => 4, 'six' => 6, 'twelve' => 12];
        $data['category'] = $bannerType;


        $data['nav'] = $navData[$bannerType] . " " . $this->nav;
        $decryptID = decrypt($id);
        $data['data'] = DB::table('banners')->find($decryptID);
        if (!$bannerType || !in_array($bannerType, ['four', 'six', 'twelve'])) {
            abort(404);
        }
        $navData = ['four' => 4, 'six' => 6, 'twelve' => 12];
        $data['category'] = $bannerType;


        $data['nav'] = $navData[$bannerType] . " " . $this->nav;

        if ($request->isMethod('get')) {
            return view('admin.other.banner.edit', $data);
        } else {
            $validated = $request->validate([
                'link' => 'nullable|url',
            ]);
            $values = $request->all();
            // dd($values);
            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/banner/' . $navData[$bannerType] . "/"), $imageName);
                $imgPath = 'uploads/banner/' . $navData[$bannerType] . "/" . $imageName;
                unset($values['image']);
            } else {
                $imgPath = $data['data']->image;
            }

            $values['image'] = $imgPath;
            $values['sort'] = $request->sort ? $request->sort : 0;
            if ($request->_token) {
                unset($values['_token']);
            }

            DB::table('banners')->where('id', decrypt($id))->update($values);

            return redirect()->route('admin_banner_list',$data['category'])->with('success_message', 'Successfully Record Updated');
        }
    }


    public function Delete($bannerType,$id)
    {
        if (!$bannerType || !in_array($bannerType, ['four', 'six', 'twelve'])) {
            abort(404);
        }
        $navData = ['four' => 4, 'six' => 6, 'twelve' => 12];
        $data['category'] = $bannerType;
        $idRemoved = DB::table('banners')->where('id', decrypt($id))->update(['deleted' => 1]);
        if ($idRemoved) {
            return redirect()->route('admin_banner_list',$data['category'])->with('success_message', 'Successfully Record Removed');
        } else {
            return redirect()->route('admin_banner_list',$data['category'])->with('error_message', 'Something went wrong');
        }
    }
}
