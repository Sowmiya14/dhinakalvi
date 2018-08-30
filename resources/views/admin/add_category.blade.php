@extends('admin.layout.master')

@section('master')
    active
@endsection

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Category</h4>
        </div>
    </div>

    @include('admin.layout.errors')
    <!-- form -->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <form data-toggle="validator" class="padd-20" method="POST" action="{{ route('category.create') }}">
                    {{ csrf_field() }}
                    <div class="row mrg-0">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="category" id="inputName" placeholder="Category" required="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <div class="text-center">
                                <button type="submit" class="btn gredient-btn">Add category</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    

     <div class="card">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>Category list</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                     @if(!empty($categorys))
                @foreach($categorys as $category)
                <tr>
                    <td>{{$category->category}}</td>
                    <td>
                        <form action="{{ route('category.delete', $category->id) }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <a href="{{ route('category.edit', $category->id) }}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> </button>
                        </form>


                    </td>
                </tr>

                @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection