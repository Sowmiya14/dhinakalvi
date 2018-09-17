@extends('admin.layout.master')

@section('posts')
    active
@endsection

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Edit Content</h4>
        </div>
    </div>

    @include('admin.layout.errors')

    <div class="row" id="div3">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <!-- form start -->
                <form data-toggle="validator" class="padd-20" action="{{route('admin.update_posts', $data->id)}}" method="POST">
                    {{ csrf_field() }}
                    <div class="row mrg-0">
                    @include('ckfinder::setup')
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputName" class="control-label">Posts</label>
                                <textarea class="form-control" id="summary-ckeditor" equired="" name="posts" value="{{ $data->posts }}" data-error="Please Enter posts"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="text-center">
                                    <button type="submit" class="btn gredient-btn">Update Posts</button>
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