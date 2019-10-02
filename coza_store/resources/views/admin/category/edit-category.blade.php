@extends('admin.master')

@section('body')
    <div class="col-xl-8 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Edit Category</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                <form action="{{route('update-category')}}" method="post">
                    @csrf
                    <h6 class="heading-small text-muted mb-4">Category information</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Category Name</label>
                                    <input type="text" class="form-control form-control-alternative" placeholder="Category Name" name="category_name" value="{{$category->category_name}}">
                                    <input type="hidden" class="form-control form-control-alternative" name="category_id" value="{{$category->id}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Category Description</label>
                                    <textarea rows="4" cols="82" class="form-control form-control-alternative" placeholder="Category Description" name="category_description">{{$category->category_name}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label>Publication Status</label>
                                <input type="radio" name="publication_status" {{$category->publication_status == 1 ? 'checked' : ''}} value="1"> Published
                                <input type="radio" name="publication_status" {{$category->publication_status == 0 ? 'checked' : ''}} value="0"> Unpublished
                            </div>
                        </div>
                    </div>

                    <hr class="my-4" />
                    <!-- Address -->
                    <input type="submit" class="btn btn-primary btn-block">
                </form>
            </div>
        </div>
    </div>
@endsection