@extends('admin.layout.master')

@section('dashboard')
    active
@endsection

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Dashboard</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="float-right">
                        <i class="icon ti-layout-grid2 gredient-cl font-30"></i>
                    </div>
                    <div class="widget-detail">
                       <h5 class="xs-10">{{ $data['total_category'] }} </h5>
                        <span>Total Categories</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="float-right">
                        <i class="icon ti-cloud-up gredient-cl font-30"></i>
                    </div>
                    <div class="widget-detail">
                       <h5 class="xs-10">{{ $data['total_posts'] }} </h5>
                        <span>Total Posts</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection