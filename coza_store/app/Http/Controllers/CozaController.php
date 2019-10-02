<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;

class CozaController extends Controller
{
    public function index(){
        $sliders = Slider::where('publication_status',1)->get();
        $products = Product::where('publication_status',1)
                                ->orderBy('id','DESC')
                                ->skip(1)
                                ->take(8)
                                ->get();
        return view('front-end.home.home',[

            'products' => $products,
            'sliders' => $sliders
        ]);
    }

    public function categoryProduct($id){
        $categoryProducts = Product::where('category_id',$id)->where('publication_status',1)->get();
        return view('front-end.category.category-product',[
            'categoryProducts' => $categoryProducts
        ]);
    }

    public function productDetails($id){
        $product = Product::find($id);
        return view('front-end.product.product-details',[
            'product' => $product
        ]);
    }
}
