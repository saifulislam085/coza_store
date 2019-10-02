@extends('admin.master')

@section('body')
    <div class="col-xl-8 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Add Brand</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                <h6 class="heading-small text-muted mb-4">Brand information</h6>
                {{Form::open(['route'=>'new-brand','method'=>'post','class'=>'form-horizontal'])}}
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Brand Name</label>
                                <input type="text" class="form-control form-control-alternative" placeholder="Brand Name" name="brand_name">
                                <span class="text-danger">{{$errors->has('brand_name') ? $errors->first('brand_name') : ''}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Brand Description</label>
                                <textarea rows="4" cols="82" class="form-control form-control-alternative" placeholder="Brand Description" name="brand_description"></textarea>
                                <span class="text-danger">{{$errors->has('brand_description') ? $errors->first('brand_description') : ''}}</span>
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
@endsection