<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\OptionGroup;
use App\Models\ProductReview;
use App\Models\Category;

class ProductController extends Controller
{

    public function List() {
        $products = Product::where('status', 1)->orderBy('sort_order', 'ASC')->paginate(10);
        $option_groups = OptionGroup::get();
        $categories = Category::where('parent_id', '!=', 0)->get();
        return view('Front.products', compact('products', 'option_groups', 'categories'));
    }

    public function Detail(Request $request) {
        $id = $request->id ? decrypt($request->id) : $request->id;
        $product = Product::find($id);
        $option_groups = OptionGroup::get();
        return view('Front.product_detail', compact('product', 'option_groups'));
    }

    public function saveReview(Request $request) {
        //dd($request->all());
        $review = new ProductReview();
        $validated = $request->validate([
            'rating' => 'required',
            'name' => 'required',
            'email' => 'required',
            'commemt' => 'required',
        ]);
        $product_id = decrypt($request->product_id);
        $review->product_id = $product_id;
        $review->user_id = 0;
        $review->name = $request->name;
        $review->email = $request->email;
        $review->comment = $request->comment;
        $review->rating = $request->rating;
        $review->status = 0;
        if($review->save()) {
            return redirect()->route('frontend_product_detail', $request->product_id)->with('success_message', 'Thank you for your review. It has been submitted to the webmaster for approval.');
        } else {
            return redirect()->route('frontend_product_detail', $request->product_id)->with('error_message', 'Something went wrong!');
        }
    }
}
