@extends('admin.layout.master')

@section('vendor')
    active
@endsection

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Add Vendor</h4>
        </div>
    </div>

    @include('admin.layout.errors')

    <!-- form -->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <!-- form start -->
                <form data-toggle="validator" class="padd-20" method="post" action="{{ url('/admin/vendor/add') }}">
                    {{ csrf_field() }}
                    <div class="row mrg-0">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputName" class="control-label">Business Name</label>
                                <input type="text" class="form-control" name="businessname" id="inputName" onKeyPress="return ValidateAlpha(event);" data-error="Please Enter Business Name"  required="" value="{{ old('businessname') }}" minlength="3" maxlength="5"/>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputEmail" class="control-label" >GST Number</label>
                                
                                <input type="text" class="form-control" id="inputEmail"name="gstnumber" data-error="Please Enter GST Number" required="" value="{{ old('gstnumber') }}"maxlength="15"/>
                                  
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="row mrg-0">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputphone" class="control-label">Email</label>
                                <input type="email" class="form-control" name="email" id="inputphone" required="" value="{{ old('email') }}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Owner Name</label>
                                <input type="text" class="form-control" name="ownername" onkeypress="return onlyAlphabets(event,this);" required="" value="{{ old('ownername') }}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                    </div>

                    <div class="row mrg-0">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Mobile Number</label>
                                <input type="tel" name="mobilenumber" class="form-control" onkeypress="return isNumberKey(event)" value="{{ old('mobilenumber') }}" maxlength="10"/>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Vendor Type</label>
                                <select class="custom-select mb-2 form-control" name="vendortype" >
                                    <option>Choose...</option>
                                    @foreach($datas as $data)
                                        <option value="{{ $data->id }}" {{ (old('vendortype') == $data->id ? "selected":"") }}>{{ $data->typename }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mrg-0">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Contact Person Name 1</label>
                                <input type="text" name="contactpersonname1" class="form-control" onkeypress="return onlyAlphabets(event,this);" value="{{ old('contactpersonname1') }}" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Contact Person Mobile Number 1</label>
                                <input type="tel" name="contactpersonmobileno1" class="form-control"  onkeypress="return isNumberKey(event)" value="{{ old('contactpersonmobileno1') }}" maxlength="10"/>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                    </div>

                    <div class="row mrg-0">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Contact Person Name 2</label>
                                <input type="text" name="contactpersonname2" class="form-control" onkeypress="return onlyAlphabets(event,this);" value="{{ old('contactpersonname2') }}" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Contact Person Mobile Number2</label>
                                <input type="tel" name="contactpersonmobileno2" class="form-control" onkeypress="return isNumberKey(event)"  value="{{ old('contactpersonmobileno2') }}" maxlength="10"/>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                    </div>

                    <div class="row mrg-0">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Business Location</label>
                                <input type="text" name="businesslocation" class="form-control" value="{{ old('businesslocation') }}" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Serviceable Area</label>
                                <input type="text" name="serviceablearea" class="form-control" value="{{ old('serviceablearea') }}" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                    </div>

                    <div class="row mrg-0">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Serviceable Number of Events</label>
                                <input type="text" name="serviceablenoofevents" class="form-control" onkeypress="return isNumberKey(event)" value="{{ old('serviceablenoofevents') }}" maxlength="3  " required="">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Password</label>
                                <input type="password" name="password" class="form-control" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <div class="text-center">
                                <button type="submit" class="btn gredient-btn">Add Vendor</button>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
        <!-- /.col-md-12 -->

    </div>

@endsection
