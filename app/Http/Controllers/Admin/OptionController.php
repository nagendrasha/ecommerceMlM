<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OptionGroup;
use App\Models\Option;

class OptionController extends Controller
{
    public function ListOptionGroup() {
        $data['nav'] = "Option Group";
        $data['options'] = OptionGroup::get();
        return view('admin.products.option-group.list', $data);
    }

    public function SaveOptionGroup(Request $request) {
        $group = OptionGroup::findOrNew($request->id);
        $validated = $request->validate([
            'name' => 'required',
        ]);
        $group->name = $request->name;
        $group->sort_order = $request->sort_order ? $request->sort_order : 0;
        if($group->save()) {
            return redirect()->route('admin_option_option_group')->with('success_message', 'Option Group saved successfully!');
        } else {
            return redirect()->route('admin_option_option_group')->with('error_message', 'Something went wrong!!');
        }
    }

    public function fetchSingle(Request $request) {
        $option = OptionGroup::find($request->id);
        return $option;
    }

    public function DeleteOptionGroup(Request $request) {
        $option = OptionGroup::find($request->id);
        if($option) {
            $option->delete();
        }
        return response()->json(['message'=>'Option Group Deleted Successfully'], 200);
    }

    public function ListOption() {
        $data['nav'] = "Option";
        $data['options'] = Option::get();
        $data['option_groups'] = OptionGroup::get();
        return view('admin.products.option.list', $data);
    }

    public function SaveOption(Request $request) {
        $group = Option::findOrNew($request->id);
        $validated = $request->validate([
            'option_name' => 'required',
            'option_type' => 'required',
            'option_group_id' => 'required',
        ]);
        $group->option_name = $request->option_name;
        $group->option_type = $request->option_type;
        $group->option_group_id = $request->option_group_id;
        $group->sort_order = $request->sort_order ? $request->sort_order : 0;
        if($group->save()) {
            return redirect()->route('admin_options_list')->with('success_message', 'Option saved successfully!');
        } else {
            return redirect()->route('admin_options_list')->with('error_message', 'Something went wrong!!');
        }
    }

    public function fetchSingleOption(Request $request) {
        $option = Option::find($request->id);
        return $option;
    }

    public function DeleteOption(Request $request) {
        $option = Option::find($request->id);
        if($option) {
            $option->delete();
        }
        return response()->json(['message'=>'Option Group Deleted Successfully'], 200);
    }
}