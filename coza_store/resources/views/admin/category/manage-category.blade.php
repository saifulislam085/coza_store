@extends('admin.master')

@section('body')
    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-8">
                <div class="panel">
                    <div class="panel-body">
                        <h3 class="text-success text-center">{{Session::get('message')}}</h3>
                        <table class="table">
                            <tr>
                                <th>Sl No.</th>
                                <th>Category Name</th>
                                <th>Category Description</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            @php($i=1)
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$category -> category_name}}</td>
                                <td>{{$category -> category_description}}</td>
                                <td>{{$category -> publication_status == 1? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    @if($category->publication_status == 1)
                                        <a href="{{route('unpublished-category',['id'=>$category->id])}}" class="btn btn-info">
                                            <span class=""><i class="fas fa-long-arrow-alt-up"></i></span>
                                        </a>
                                    @else
                                        <a href="{{route('published-category',['id'=>$category->id])}}" class="btn btn-warning">
                                            <span class=""><i class="fas fa-long-arrow-alt-down"></i></span>
                                        </a>
                                    @endif
                                    <a href="{{route('edit-category',['id'=>$category->id])}}" class="btn btn-success">
                                        <span class=""><i class="fas fa-edit"></i></span>
                                    </a>
                                    @if(Auth::user()->role == 'admin')
                                    <a href="{{route('delete-category',['id'=>$category->id])}}" onclick="return confirm('Are You Sure to Delete Data?')" class="btn btn-danger">
                                        <span class=""><i class="fas fa-trash"></i></span>
                                    </a>
                                        @endif
                                </td>
                            </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection