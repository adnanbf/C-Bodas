@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register Merchant</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Nama</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Alamat E-Mail</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telp') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Telepon</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="telp" maxlength="12" value="{{ old('telp') }}">

                                @if ($errors->has('telp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('streetMerchant') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="streetMerchant" placeholder="Jalan + Nomor" value="{{ old('streetMerchant') }}">

                                @if ($errors->has('streetMerchant'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('streetMerchant') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('cityMerchant') ? ' has-error' : '' }}">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="text" class="form-control" name="cityMerchant" placeholder="Kota" value="{{ old('cityMerchant') }}">

                                @if ($errors->has('cityMerchant'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cityMerchant') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('provMerchant') ? ' has-error' : '' }}">

                            <div class="col-md-6 col-md-offset-4">
                                <input type="text" class="form-control" name="provMerchant" placeholder="Propinsi" value="{{ old('provMerchant') }}">
                                    
                                @if ($errors->has('provMerchant'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('provMerchant') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('zipCodeMerchant') ? ' has-error' : '' }}">

                            <div class="col-md-6 col-md-offset-4">
                                <input type="text" class="form-control" name="zipCodeMerchant" placeholder="Kode Pos" maxlength="5" value="{{ old('zipCodeMerchant') }}">

                                    @if ($errors->has('zipCodeMerchant'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('zipCodeMerchant') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        

                            <label class="col-md-4 control-label">Unggah Foto</label>

                            <div class="col-md-6">
                                <!-- <form action="{{ URL::to('uploadImageMerchant') }}" method="post" enctype="multipart/form-data" id="uploadImage"> -->
                                    <input type="file" name="imageMerchant" id="imageMerchant" required>
                                    
                                    <!-- <input type="button" value="Upload" name="submit" onClick='uploadButton();'> -->
                                    
                                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                <!-- </form> -->
                            </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" name="submit" value="Register">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type='text/javascript'>
    var LOCAL_URL = "{{ URL::to('uploadImageMerchant') }}";
    function uploadButton() {
        var data = $('#uploadImage').serialize();
        $.post( LOCAL_URL, data, new function(response){
            // Successfully posted by AJAX to Local Website;
            //  -- now POST the form to the destination site, 
            //  -- & navigate to that result page.
            $('#uploadImage').submit();
        });
        // $('#uploadImage').submit();  


        $("#uploadImage").submit(function (event) {
        event.preventDefault();
        //grab all form data  
        var formData = $(this).serialize();

        $.ajax({
            url: "{{ URL::to('uploadImageMerchant') }}",
            type: 'POST',
            data: formData,
            async: false,
            cache: false,
            contentType: true,
            processData: false,
            success: function (returndata) {
                $("#productFormOutput").html(returndata);
                alert(formData);
            },
            error: function () {
                alert("error in ajax form submission");
            }
        });

      return false;
  });


    }
</script>

@endsection
