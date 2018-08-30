@extends('admin.layout.master')

@section('vendor')
    active
@endsection

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Update Vendor</h4>
        </div>
    </div>

    @include('admin.layout.errors')

    <!-- form -->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <!-- form start -->
                <form data-toggle="validator" class="padd-20" method="post" action="{{ route('admin.update_vendor',$editvendor->id) }}">
                    {{ csrf_field() }}
                    <div class="row mrg-0">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputName" class="control-label">Business Name</label>
                                <input type="text" class="form-control" name="businessname" id="inputName" value="{{$editvendor->businessname}}" data-error="Please Enter Business Name" required=""  >
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputEmail" class="control-label">GST Number</label>
                                <input type="text" class="form-control" id="inputEmail" name="gstnumber" value="{{$editvendor->gstnumber}}" data-error="Please Enter GST Number" required="" >
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                    </div>

                    <div class="row mrg-0">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputphone" class="control-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{$editvendor->email}}" id="inputphone" required="" >
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Owner Name</label>
                                <input type="text" class="form-control" name="ownername" value="{{$editvendor->ownername}}" required="" >
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                    </div>

                    <div class="row mrg-0">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Mobile Number</label>
                                <input type="tel" name="mobilenumber" class="form-control"  value="{{$editvendor->mobilenumber}}" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Vendor Type</label>
                                <select class="custom-select mb-2 form-control" name="vendortype" >
                                    @foreach(\App\Helpers\Helper::getVendortype() as $data)
                                        <option value="{{ $data->id }}" {{ ($editvendor->vendortype == $data->id ? "selected":"") }}>{{ $data->typename }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mrg-0">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Contact Person Name 1</label>
                                <input type="text" name="contactpersonname1" class="form-control"  value="{{$editvendor->contactpersonname1}}" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Contact Person Mobile Number 1</label>
                                <input type="tel" name="contactpersonmobileno1" class="form-control"  value="{{$editvendor->contactpersonmobileno1}}" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                    </div>

                    <div class="row mrg-0">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Contact Person Name 2</label>
                                <input type="text" name="contactpersonname2" class="form-control"  value="{{$editvendor->contactpersonname2}}" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Contact Person Mobile Number2</label>
                                <input type="tel" name="contactpersonmobileno2" class="form-control"  value="{{$editvendor->contactpersonmobileno2}}" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                    </div>

                    <div class="row mrg-0">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Business Location</label>
                                <input type="text" name="businesslocation" class="form-control"  value="{{$editvendor->businesslocation}}" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Serviceable Area</label>
                                <input type="text" name="serviceablearea" class="form-control" value="{{$editvendor->serviceablearea}}" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                    </div>

                    <div class="row mrg-0">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Serviceable Number of Events</label>
                                <input type="text" name="serviceablenoofevents" class="form-control"  value="{{$editvendor->serviceablenoofevents}}" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>



                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <div class="text-center">
                                <button type="submit" class="btn gredient-btn">Update Vendor</button>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
        <!-- /.col-md-12 -->

    </div>

@endsection
