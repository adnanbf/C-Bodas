@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile {{Auth::user()->name}}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/user/profile/{{Auth::user()->id}}">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label class="col-md-4 control-label">User Sebagai</label>
                            <div class="col-md-6">
                                <select class="form-control" name="userAs" id="userAs" disabled>
                                    <option value="1">Penjual</option>
                                    <option value="0">Pembeli</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Nama</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Alamat E-Mail</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telp') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Telepon</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="telp" maxlength="12" value="{{Auth::user()->telp}}">

                                @if ($errors->has('telp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                            <div class="form-group{{ $errors->has('street') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Alamat</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="street" placeholder="Jalan + Nomor" value="{{Auth::user()->street}}">

                                    @if ($errors->has('street'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('street') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                <div class="col-md-6 col-md-offset-4">
                                    <input type="text" class="form-control" name="city" placeholder="Kota" value="{{Auth::user()->city}}">

                                    @if ($errors->has('city'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('prov') ? ' has-error' : '' }}">

                                <div class="col-md-6 col-md-offset-4">
                                    <input type="text" class="form-control" name="prov" placeholder="Propinsi" value="{{Auth::user()->prov}}">
                                        
                                    @if ($errors->has('prov'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('prov') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('zipCode') ? ' has-error' : '' }}">

                                <div class="col-md-6 col-md-offset-4">
                                    <input type="text" class="form-control" name="zipCode" placeholder="Kode Pos" maxlength="5" value="{{Auth::user()->zipCode}}">

                                        @if ($errors->has('zipCode'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('zipCode') }}</strong>
                                            </span>
                                        @endif
                                </div>
                            </div>

                        

                        <!--     <label class="col-md-4 control-label">Unggah Foto</label>

                            <div class="col-md-6"> -->
                                <!-- <form action="{{ URL::to('uploadImageMerchant') }}" method="post" enctype="multipart/form-data" id="uploadImage"> -->
                                    <!-- <input type="file" name="imageMerchant" id="imageMerchant" required> -->
                                    
                                    <!-- <input type="button" value="Upload" name="submit" onClick='uploadButton();'> -->
                                    
                                    <!-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> -->
                                <!-- </form> -->
                            <!-- </div> -->

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" name="submit" value="">
                                    <input type="hidden" name="_method" value="put">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <i class="fa fa-btn fa-user"></i>Simpan
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
