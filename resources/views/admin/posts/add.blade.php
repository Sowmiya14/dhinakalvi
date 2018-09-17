@extends('admin.layout.master')

@section('posts')
    active
@endsection

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-6 align-self-center">
            <h4 class="theme-cl">Add Post</h4>
        </div>
        <div class="col-md-6 align-self-center">
            <div class="text-center pull-right">
                <a href="{{ url('/admin/posts/view') }}" ><button type="button" class="btn gredient-btn">View Category</button></a>
            </div>
        </div>
    </div>

    @include('admin.layout.errors')

    <style>                    
    .asterisk:after{

        content:"*" ;

        color:red ;
        </style>
    <div class="row" id="div3">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <!-- form start -->
                <form data-toggle="validator" class="padd-20" action="{{route('admin.add_posts')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    @include('admin.layout.category')

                    <div class="row mrg-0">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="inputName" class="control-label"><span class="asterisk">Text Content</span></label>
                                <textarea class="form-control" id="summary-ckeditor" equired="" name="posts" data-error="Please Enter posts"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="text-center">
                                    <button type="submit" class="btn gredient-btn"> Add Post</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
        <!-- /.col-md-12 -->

    </div>



@endsection