<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        return view('admin.brand.add-brand');
    }

    public function saveBrandInfo(Request $request){
        $this->validate($request,[
                'brand_name' => 'required|regex:/(^([a-zA-Z ]+)(\d+)?$)/u|max:10|min:2',
                'brand_description' => 'required|max:200',
                'publication_status' => 'required'
        ]);

        $brand = new Brand();

        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;
        $brand->save();

        return redirect('/brand/add')->with('message','Brand added successfully');
    }

    public function showBrandInfo(){
        return view('admin.brand.manage-brand');
    }
}
