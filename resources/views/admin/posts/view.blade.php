@extends('admin.layout.master')

@section('posts')
    active
@endsection

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-6 align-self-center">
            <h4 class="theme-cl">Posts</h4>
        </div>
        <div class="col-md-6 align-self-center">
            <div class="text-center pull-right">
                <a href="{{ url('/admin/posts/add') }}" ><button type="button" class="btn gredient-btn">Add Post</button></a>
            </div>
        </div>
    </div>


    <!-- Table Card -->

    <div class="card">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                   <th>Content</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($datas as $data)
                    <tr>
                        <td>{{ $data->category}}</td>
                        <td>
                            <form action="{{ route('admin.destory_posts', $data->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <a href="{{route('admin.edit_posts',$data->id)}}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
