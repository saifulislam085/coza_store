@extends('admin.master')

@section('body')
    <div class="col-xl-8 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Add Product</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                <h6 class="heading-small text-muted mb-4">Product information</h6>

                {{Form::open(['route'=>'new-product','method'=>'post','class'=>'form-horizontal','enctype'=>'multipart/form-data'])}}

                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Category Name</label>
                                <select class="form-control" name="category_id">
                                    <option>---Select Category Name---</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Brand Name</label>
                                <select class="form-control" name="brand_id">
                                    <option>---Select Brand Name---</option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Product Name</label>
                                <input type="text" class="form-control form-control-alternative" placeholder="Product Name" name="product_name">
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                <span class="text-danger">{{$errors->has('product_name') ? $errors->first('product_name') : ''}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Product Price</label>
                                <input type="number" class="form-control form-control-alternative" placeholder="Product Price" name="product_price">
                                <span class="text-danger">{{$errors->has('product_price') ? $errors->first('product_price') : ''}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Product Quantity</label>
                                <input type="number" class="form-control form-control-alternative" placeholder="Product Quantity" name="product_quantity">
                                <span class="text-danger">{{$errors->has('product_quantity') ? $errors->first('product_quantity') : ''}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Product Short Description</label>
                                <textarea rows="2" cols="82" class="form-control form-control-alternative" placeholder="Short Description" name="short_description"></textarea>
                                <span class="text-danger">{{$errors->has('short_description') ? $errors->first('short_description') : ''}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Product Long Description</label>
                                <textarea rows="4" cols="82" id="editor" class="form-control form-control-alternative" placeholder="Long Description" name="long_description"></textarea>
                                <span class="text-danger">{{$errors->has('long_description') ? $errors->first('long_description') : ''}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Product Image</label>
                                <input type="file" class="form-control form-control-alternative" name="product_image">
                                <span class="text-danger">{{$errors->has('product_image') ? $errors->first('product_image') : ''}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label>Publication Status</label>
                            <input type="radio" name="publication_status" value="1"> Published
                            <input type="radio" name="publication_status" value="0"> Unpublished
                            <span class="text-danger">{{$errors->has('publication_status') ? $errors->first('publication_status') : ''}}</span>
                        </div>
                    </div>
                </div>

                <hr class="my-4" />
                <!-- Address -->
                <input type="submit" class="btn btn-primary btn-block">

                {{Form::close()}}
            </div>
        </div>
    </div>
    <script>
        initSample();
    </script>
@endsection