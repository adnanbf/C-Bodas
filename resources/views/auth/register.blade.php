@extends('layouts.app')

@section('content')

<script type="text/javascript">

   // function changeFunc() {
   //  // var userAs = document.getElementById("userAs");
   //  // var selectedValue = selectBox.options[selectBox.selectedIndex].value;
   //  var x = document.getElementById("userAs").value;
   //  document.getElementById("showValue").innerHTML = x;


   // }

   function show(aval) {

    if (aval == "1") {
        hiddenPembeli.style.display='none';

        hiddenPenjual.style.display='inline-block';
        Form.fileURL.focus();

    }else{
        hiddenPenjual.style.display='none';

        hiddenPembeli.style.display='inline-block';
        Form.fileURL.focus();
    }
  }

</script> 

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Form Pendaftaran</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label class="col-md-4 control-label">Daftar Sebagai</label>
                            <div class="col-md-6">
                                <!-- <select class="form-control" name="userAs" id="userAs" onchange="changeFunc();"> -->
                                <select class="form-control" name="userAs" id="userAs" onchange="java_script_:show(this.options[this.selectedIndex].value)">
                                <!-- <select class="form-control" name="userAs" id="userAs"> -->

                                    <option value="1">Penjual</option>
                                    <option value="0">Pembeli</option>
                                </select>
                            </div>

                        <!-- <p id="showValue"></p> -->

                        </div>

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

                        <div class="form-group{{ $errors->has('street') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="street" placeholder="Jalan + Nomor" value="{{ old('street') }}">

                                @if ($errors->has('street'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('street') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<!-- hiddenPenjual -->
                        <div id="hiddenPenjual" style="display:none" class="col-md-6 col-md-offset-4">

                            <div class="form-group">
                                <!-- <div class="col-md-6 col-md-offset-4"> -->
                                    <input type="text" class="form-control" name="city" value="Kab. Bandung" disabled>

                                <!-- </div> -->
                            </div>

                            <div class="form-group">
                                <!-- <div class="col-md-6 col-md-offset-4"> -->
                                    <input type="text" class="form-control" name="prov" value="Jawa Barat" disabled>
                                <!-- </div> -->
                            </div>

                            <div class="form-group">
                                <!-- <div class="col-md-6 col-md-offset-4"> -->
                                    <input type="text" class="form-control" name="zipCode" maxlength="5" value="40391" disabled>
                                <!-- </div> -->
                            </div>
                        </div>

<!-- hiddenPembeli -->
                        <div id="hiddenPembeli" style="display:none" class="col-md-6 col-md-offset-4">
                                                    
                            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                <!-- <div class="col-md-6 col-md-offset-4"> -->
                                    <input type="text" class="form-control" name="city" placeholder="Kota / Kabupaten" value="{{ old('city') }}">

                                    @if ($errors->has('city'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                    @endif
                                <!-- </div> -->
                            </div>

                            <div class="form-group{{ $errors->has('prov') ? ' has-error' : '' }}">

                                <!-- <div class="col-md-6 col-md-offset-4"> -->
                                    <input type="text" class="form-control" name="prov" placeholder="Propinsi" value="{{ old('prov') }}">
                                        
                                    @if ($errors->has('prov'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('prov') }}</strong>
                                        </span>
                                    @endif
                                <!-- </div> -->
                            </div>

                            <div class="form-group{{ $errors->has('zipCode') ? ' has-error' : '' }}">

                                <!-- <div class="col-md-6 col-md-offset-4"> -->
                                    <input type="text" class="form-control" name="zipCode" placeholder="Kode Pos" maxlength="5" value="{{ old('zipCode') }}">

                                        @if ($errors->has('zipCode'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('zipCode') }}</strong>
                                            </span>
                                        @endif
                                <!-- </div> -->
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" name="submit" value="Register">
                                    <i class="fa fa-btn fa-user"></i>Daftar
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
