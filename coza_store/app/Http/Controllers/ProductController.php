<?php

namespace App\Http\Controllers;

use App\Category;
use App\Brand;
use App\Product;
use Illuminate\Http\Request;
use Image;
use DB;

class ProductController extends Controller
{
    public function index(){
        $categories = Category::where('publication_status',1)->get();
        $brands = Brand::where('publication_status',1)->get();
        return view('admin.product.add-product',[
            'categories' => $categories,
            'brands' => $brands
        ]);
    }

    protected function productValidate($request){
        $this->validate($request,[
            'product_name' => 'required',
        ]);
    }

    protected function productImageUpload($request){
        $productImage = $request->file('product_image');
        $fileType = $productImage->getClientOriginalName();
        $imageName = $request->product_name.'.'.$fileType;
        $directory = 'product-images/';
        $imageUrl = $directory.$imageName;
        Image::make($productImage)->resize(200,200)->save($imageUrl);
        //$productImage->move($directory,$imageName);

        return $imageUrl;
    }
    protected function saveProductsInfo($request, $imageUrl){
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->user_id = $request->user_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->product_image = $imageUrl;
        $product->publication_status = $request->publication_status;
        $product->save();
    }

    public function saveProductInfo(Request $request){
        $this->productValidate($request);
        $imageUrl = $this->productImageUpload($request);
        $this>$this->saveProductsInfo($request, $imageUrl);

        return redirect('/product/add')->with('message','Product Added Successfully');
    }

    public function showProductInfo(){
        $products = DB::table('products')
                            ->join('categories','products.category_id','=','categories.id')
                            ->join('brands','products.brand_id','=','brands.id')
                            ->select('products.*','categories.category_name','brands.brand_name')
                            ->get();
        return view('admin.product.manage-product',[
            'products' => $products
        ]);
    }
}
