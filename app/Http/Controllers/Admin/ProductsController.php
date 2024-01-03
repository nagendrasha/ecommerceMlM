<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\OptionGroup;
use App\Models\Product;
use App\Models\ProductOption;
use App\Models\ProductImage;
use App\Models\ProductTag;
use App\Models\ProductReview;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Manufacturer;
use File;

class ProductsController extends Controller
{
    //
    public function Add(Request $request)
    {
        $id = $request->id;
        if($request->id) {
            $id = decrypt($id);
        }
        $data['product'] = Product::find($id);
        $tag_name = [];
        if($data['product'] && $data['product']->getTag) {
            foreach($data['product']->getTag as $tag){
                array_push($tag_name, $tag->tag_name);
            }
        }
        $data['tag_name'] = implode(', ', $tag_name);
        $data['category'] = Category::where('parent_id', 0)->where('status', 1)->get();
        $data['manufacturer'] = Manufacturer::where('status', 1)->get();
        $data['option_groups'] = OptionGroup::get();
        $data['brands'] = Brand::get();
        return view('admin.products.add-product.add-product', $data);
    }
    public function List()
    {
        $data['products'] = Product::get();
        return view('admin.products.list-product.list-product', $data);
    }

    public function saveProduct(Request $request) {
        //dd($request->all());
        $product = Product::findOrNew($request->id);
        $validated = $request->validate([
            'name' => 'required',
            'code' => 'required',
            'category_id' => 'required',
            'price' => 'required',
        ]);
        if($request->hasFile('main_image')){
            $request->validate([
            'main_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $imageName = time().'.'.$request->main_image->extension();
            $path = 'uploads/product/'.$product->id;
            $request->main_image->move(public_path($path), $imageName);
            $product->main_image = $path.'/'.$imageName;
        }
        $product->name = $request->name;
        $product->slug = $request->slug == '' ? Str::slug($request->name) : $request->slug;
        $product->code = $request->code;
        $product->sku = $request->sku;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->length = $request->length;
        $product->width = $request->width;
        $product->height = $request->height;
        $product->length_class = $request->length_class;
        $product->weight = $request->weight;
        $product->weight_class = $request->weight_class;
        $product->minimum_order = $request->minimum_order;
        $product->manufacturer_id = $request->manufacturer_id;
        $product->brand_id = $request->brand_id;
        $product->meta_title = $request->meta_title;
        $product->meta_keyword = $request->meta_keyword;
        $product->meta_description = $request->meta_description;
        $product->sort_order = $request->sort_order ? $request->sort_order : 0;
        $product->status = $request->status;
        if($product->save()) {
            if($request->hasFile('image1')){
                $p_image = new ProductImage();
                $request->validate([
                'image1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                ]);
                $imageName = time().'.'.$request->image1->extension();
                $path = 'uploads/product/'.$product->id;
                $request->image1->move(public_path($path), $imageName);
                $p_image->product_id = $product->id;
                $p_image->image = $path.'/'.$imageName;
                $p_image->sort_order = 1;
                $p_image->save();
            }
            if($request->hasFile('image2')){
                $p_image = new ProductImage();
                $request->validate([
                'image2' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                ]);
                $imageName = time().'.'.$request->image2->extension();
                $path = 'uploads/product/'.$product->id;
                $request->image2->move(public_path($path), $imageName);
                $p_image->product_id = $product->id;
                $p_image->image = $path.'/'.$imageName;
                $p_image->sort_order = 2;
                $p_image->save();
            }
            if($request->hasFile('image3')){
                $p_image = new ProductImage();
                $request->validate([
                'image3' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                ]);
                $imageName = time().'.'.$request->image3->extension();
                $path = 'uploads/product/'.$product->id;
                $request->image3->move(public_path($path), $imageName);
                $p_image->product_id = $product->id;
                $p_image->image = $path.'/'.$imageName;
                $p_image->sort_order = 3;
                $p_image->save();
            }
            if($request->hasFile('image4')){
                $p_image = new ProductImage();
                $request->validate([
                'image4' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                ]);
                $imageName = time().'.'.$request->image4->extension();
                $path = 'uploads/product/'.$product->id;
                $request->image4->move(public_path($path), $imageName);
                $p_image->product_id = $product->id;
                $p_image->image = $path.'/'.$imageName;
                $p_image->sort_order = 4;
                $p_image->save();
            }
            if($request->hasFile('image5')){
                $p_image = new ProductImage();
                $request->validate([
                'image5' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                ]);
                $imageName = time().'.'.$request->image5->extension();
                $path = 'uploads/product/'.$product->id;
                $request->image5->move(public_path($path), $imageName);
                $p_image->product_id = $product->id;
                $p_image->image = $path.'/'.$imageName;
                $p_image->sort_order = 5;
                $p_image->save();
            }
            if($request->hasFile('image6')){
                $p_image = new ProductImage();
                $request->validate([
                'image6' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                ]);
                $imageName = time().'.'.$request->image6->extension();
                $path = 'uploads/product/'.$product->id;
                $request->image6->move(public_path($path), $imageName);
                $p_image->product_id = $product->id;
                $p_image->image = $path.'/'.$imageName;
                $p_image->sort_order = 6;
                $p_image->save();
            }

            if($request->product_tag) {
                ProductTag::where('product_id',$product->id)->delete();
                $data = explode(",",$request->product_tag);
                foreach($data as $key => $value) {
                    $p_tag = new ProductTag();
                    $p_tag->product_id = $product->id;
                    $p_tag->sort_order = $key + 1;
                    $p_tag->tag_name = $value;
                    $p_tag->save();
                }
            }

            if($request->option) {
                ProductOption::where('product_id',$product->id)->delete();
                foreach($request->option as $key => $option) {
                    foreach($option as $data) {
                        $p_option = new ProductOption();
                        $p_option->product_id = $product->id;
                        $p_option->option_group_id = $key;
                        $p_option->option_id = $data;
                        $p_option->save();
                    }
                }
            }
        }
        return redirect()->route('admin_product_list')->with('success_message', 'Product saved successfully!');
    }

    public function deleteProduct(Request $request) {
        $product = Product::find($request->id);
        if($product) {
            ProductImage::where('product_id', $request->id)->delete();
            ProductOption::where('product_id', $request->id)->delete();
            ProductTag::where('product_id', $request->id)->delete();
            $product->delete();
            File::deleteDirectory(public_path('uploads/product/'.$request->id));
            return response()->json(['message'=>'Product Deleted Successfully'], 200);
        }
    }

    public function productReviewList() {
        $reviews = ProductReview::get();
        return view('admin.products.review.product-review', compact('reviews'));
    }

    public function productReviewEdit(Request $request) {
        $data['nav'] = 'Review';
        $id = decrypt($request->id);
        $data['review'] = ProductReview::find($id);
        return view('admin.products.review.edit-review', $data);
    }

    public function saveProductReview(Request $request) {
        $data = ProductReview::find($request->id);
        $data->status = $request->status;
        if($data->save()) {
            return redirect()->route('admin_product_review_list')->with('success_message', 'Review updated successfully!');
        } else {
            return redirect()->route('admin_product_review_list')->with('error_message', 'Something went wrong!');
        }
    }
}
