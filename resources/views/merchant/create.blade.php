@extends('layouts.app')

@section('content')

<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>



<script type="text/javascript">

   // function changeFunc() {
   //  // var userAs = document.getElementById("userAs");
   //  // var selectedValue = selectBox.options[selectBox.selectedIndex].value;
   //  var x = document.getElementById("userAs").value;
   //  document.getElementById("showValue").innerHTML = x;


   // }

  //  function show(aval) {

  //   if (aval == "1") {
  //       hiddenTernak.style.display='none';

  //       hiddenPertanian.style.display='inline-block';
  //       Form.fileURL.focus();

  //   }else{
  //       hiddenPertanian.style.display='none';

  //       hiddenTernak.style.display='inline-block';
  //       Form.fileURL.focus();
  //   }
  // }

$(document).ready(function(){
    $(".category").change(function(){
        $(this).find("option:selected").each(function(){
            if($(this).attr("value")=="1"){
                $(".box").not(".1").hide();
                $(".tani").show();
            }
            else if($(this).attr("value")=="2"){
                $(".box").not(".2").hide();
                $(".ternak").show();
            }
            else if($(this).attr("value")=="3"){
                $(".box").not(".3").hide();
                $(".wisata").show();
            }else if($(this).attr("value")=="4"){
                $(".box").not(".4").hide();
                $(".villa").show();
            }else if($(this).attr("value")=="5"){
                $(".box").not(".5").hide();
                $(".edukasi").show();
            }
            else{
                $(".box").hide();
            }
        });
    }).change();
});

// $(document).ready(function(){
//     $(".gender").change(function(){
//         $(this).find("option:selected").each(function(){
//             if($(this).attr("value")=="M"){
//                 $(".box").not(".M").hide();
//                 $(".male").show();
//             }
//             else if($(this).attr("value")=="F"){
//                 $(".box").not(".F").hide();
//                 $(".female").show();
//             }
//             else{
//                 $(".box").hide();
//             }
//         });
//     }).change();
// });
$(document).ready(function(){
    $('#sandbox-container .input-append.date').datepicker({
    clearBtn: true,
    language: "id",
    multidate: true,
    forceParse: false,
    todayHighlight: true,
    datesDisabled: ['04/06/2016', '04/21/2016']
});
}


</script> 

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Lapak Baru</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label class="col-md-4 control-label">Jenis Lapak</label>
                            <div class="col-md-6">

                                <select class="form-control category" name="category" id="category" onchange="java_script_:show(this.options[this.selectedIndex].value)">
                                    <!-- <option value="">Silahkan Pilih Jenis Lapak</option> -->
                                    <option value="1">Pertanian</option>
                                    <option value="2">Hewan Ternak</option>
                                    <option value="3">Tiket Pariwisata</option>
                                    <option value="4">Persewaan Villa</option>
                                    <option value="5">Edukasi Tani</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Judul</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('title') }}">

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Deskripsi</label>

                            <div class="col-md-6">
                                <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                <textarea class="form-control" name="desc" value="{{ old('desc') }}"></textarea> 

                                @if ($errors->has('desc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('desc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<!-- Tani -->
                        <div class="col-md-9 col-md-offset-1 tani box">
                            <div class="form-group{{ $errors->has('stock') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Stok Tersedia</label>

                                <div class="col-md-4">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="number" class="form-control" name="stock" step="1">

                                    @if ($errors->has('stock'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('stock') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-md-3">
                                    <select class="form-control" name="massAvailable" id="massAvailable">
                                        <option value="1">Gram</option>
                                        <option value="2">Ons</option>
                                        <option value="3">Kilogram</option>
                                        <option value="4">Kwintal</option>
                                        <option value="5">Ton</option>
                                    </select>
                                </div>

                            </div>

                            <div class="form-group{{ $errors->has('stock') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Harga</label>

                                <div class="col-md-4">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="number" class="form-control" name="stock" step="50">

                                    @if ($errors->has('stock'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('stock') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <label class="col-md-1 control-label">Per</label>
                                <div class="col-md-3">
                                    <select class="form-control" name="massAvailable" id="massAvailable">
                                        <option value="1">Gram</option>
                                        <option value="2">Ons</option>
                                        <option value="3">Kilogram</option>
                                        <option value="4">Kwintal</option>
                                        <option value="5">Ton</option>
                                    </select>
                                </div>
                            </div>
                        </div>
<!-- Ternak -->
                        <div class="col-md-9 col-md-offset-1 ternak box">
                            <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Usia</label>

                                <div class="col-md-2">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="number" class="form-control" name="year" step="1" placeholder="Tahun">

                                    @if ($errors->has('year'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('year') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                <div class="col-md-2">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="number" class="form-control" name="month" step="1" placeholder="Bulan">

                                    @if ($errors->has('month'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('month') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-md-2">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="number" class="form-control" name="day" step="1" placeholder="Hari">

                                    @if ($errors->has('day'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('day') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Jenis Kelamin</label>
                                <div class="col-md-6">
                                    <!-- <select class="form-control" name="userAs" id="userAs" onchange="changeFunc();"> -->
                                    <select class="form-control gender" name="gender" id="gender">
                                    <!-- <select class="form-control" name="userAs" id="userAs"> -->

                                        <option value="M">Laki-laki</option>
                                        <option value="F">Perempuan</option>
                                    </select>
                                </div>

                            <!-- <p id="showValue"></p> -->

                            </div>

                            <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Berat</label>

                                <div class="col-md-4">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="number" class="form-control" name="weight" step="1" min="0">

                                    @if ($errors->has('weight'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('weight') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-md-3">
                                    <select class="form-control" name="massWeight" id="massWeight">
                                        <option value="1">Gram</option>
                                        <option value="2">Ons</option>
                                        <option value="3">Kilogram</option>
                                        <option value="4">Kwintal</option>
                                        <option value="5">Ton</option>
                                    </select>
                                </div>

                            </div>

                            <div class="form-group{{ $errors->has('stock') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Harga</label>

                                <div class="col-md-8">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="number" class="form-control" name="stock" step="50" min="0">

                                    @if ($errors->has('stock'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('stock') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>
                        </div>
<!-- Wisata -->
                        <div class="col-md-9 col-md-offset-1 wisata box">
                            <div class="form-group{{ $errors->has('stock') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Stok Tersedia</label>

                                <div class="col-md-4">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="number" class="form-control" name="stock" step="1">

                                    @if ($errors->has('stock'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('stock') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>

                            <div class="form-group{{ $errors->has('stock') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Harga</label>

                                <div class="col-md-4">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="number" class="form-control" name="stock" step="50">

                                    @if ($errors->has('stock'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('stock') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
<!-- Villa -->
                        <div class="col-md-9 col-md-offset-1 villa box">
                            <div class="form-group{{ $errors->has('stock') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Tanggal Sudah Terpesan</label>
                                
                                <div class="input-append date">
                                    <input type="text" class="span2"><span class="add-on" onclick="datepicker"><i class="icon-th"></i></span>
                                </div>
                                
                                <div class="col-md-4 input-append date">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="text" class="span2"><span class="add-on"><i class="icon-th"></i></span>

                                    @if ($errors->has('stock'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('stock') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>

                            <div class="form-group{{ $errors->has('stock') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Harga</label>

                                <div class="col-md-4">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="number" class="form-control" name="stock" step="50">

                                    @if ($errors->has('stock'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('stock') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
<!-- Edukasi -->
                        <div class="col-md-9 col-md-offset-1 edukasi box">
                            <div class="form-group{{ $errors->has('stock') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Stok Tersedia</label>

                                <div class="col-md-4">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="number" class="form-control" name="stock" step="1">

                                    @if ($errors->has('stock'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('stock') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>

                            <div class="form-group{{ $errors->has('stock') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Harga</label>

                                <div class="col-md-4">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="number" class="form-control" name="stock" step="50">

                                    @if ($errors->has('stock'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('stock') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" name="submit" value="Register">
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
