@extends('admin.layout.master')

@section('vendor')
    active
@endsection

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Approve Vendor</h4>
        </div>
    </div>

    @include('admin.layout.errors')

    <!-- Table Card -->
    <div class="card">
        <div class="table-responsive">
            <table class="table table-striped table-2 table-hover">
                <thead>
                    <tr>
                        <th>Vendor Type</th>
                        <th>Business Name</th>
                        <th>GST Number</th>
                        <th>Email</th>
                        <th>Owner Name</th>
                        <th>Mobile Number</th>
                        <th>Business Location</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($datas as $data)
                    <tr>
                        <td>{{ $data->vendortype }}</td>
                        <td>{{ $data->businessname }}</td>
                        <td>{{ $data->gstnumber }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->ownername }}</td>
                        <td>{{ $data->mobilenumber }}</td>
                        <td>{{ $data->businesslocation }}</td>
                        <td>
                            <a href="#" class="show-more" data-toggle="tooltip" title="Approve" onclick="event.preventDefault(); document.getElementById('approve-vendor-{{$data->id}}').submit();"><i class="ti-arrow-right"></i></a>
                            <form id="approve-vendor-{{$data->id}}" action="{{  route('admin.approve_vendor',$data->id) }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <!-- /.Table Card -->

@endsection
