<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Image;

class SliderController extends Controller
{
    public function index(){
        return view('admin.slider.add-slider');
    }

    public function saveSlider(Request $request){
        $productImage = $request->file('slider_image');
        $fileType = $productImage->getClientOriginalName();
        $imageName = $request->slider_name.'.'.$fileType;
        $directory = 'slider-images/';
        $imageUrl = $directory.$imageName;
        Image::make($productImage)->resize(1300,500)->save($imageUrl);


        $slider = new Slider();
        $slider->slider_image = $imageUrl;
        $slider->slider_description = $request->slider_description;
        $slider->publication_status = $request->publication_status;
        $slider->save();

        return redirect('/slider/add-slider');

    }
}
