@extends('layouts.app')

@section('content')

<!-- <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script> -->

<!-- bootsrap datepicker-->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet"> -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script> -->

    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>   -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   -->

<script type="text/javascript">

   // function changeFunc() {
   //  // var userAs = document.getElementById("userAs");
   //  // var selectedValue = selectBox.options[selectBox.selectedIndex].value;
   //  var x = document.getElementById("massAvailable").value;
   //  document.getElementById("showValue").innerHTML = x;
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

</script> 
@if (!empty(Auth::user()))
    @if(Auth::user()->userAs == 1)
                

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
                                    <select class="form-control" name="massAvailable" id="massAvailable" onchange="cangeFunc();">
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
                                    <input type="number" class="form-control" name="year" step="1" placeholder="Tahun" min="0">

                                    @if ($errors->has('year'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('year') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                <div class="col-md-2">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="number" class="form-control" name="month" step="1" placeholder="Bulan" min="0">

                                    @if ($errors->has('month'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('month') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-md-2">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="number" class="form-control" name="day" step="1" placeholder="Hari" min="0">

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

                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Harga</label>

                                <div class="col-md-8">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="number" class="form-control" name="price" step="50" min="0">

                                    @if ($errors->has('price'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>
                        </div>
<!-- Wisata -->
                        <div class="col-md-9 col-md-offset-1 wisata box">
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

                            <div class="form-group{{ $errors->has('village') ? ' has-error' : '' }}">
                                <div class="col-md-6 col-md-offset-4">
                                    <input type="text" class="form-control" name="village" value="Desa Cibodas" disabled>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                                <div class="col-md-6 col-md-offset-4">
                                    <input type="text" class="form-control" name="city" value="Kab. Bandung" disabled>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                                <div class="col-md-6 col-md-offset-4">
                                    <input type="text" class="form-control" name="prov" value="Jawa Barat" disabled>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                                <div class="col-md-6 col-md-offset-4">
                                    <input type="text" class="form-control" name="zipCode" maxlength="5" value="40391" disabled>
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('ticket') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Jumlah Tiket</label>

                                <div class="col-md-4">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="number" class="form-control" name="ticket" step="1">

                                    @if ($errors->has('ticket'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('ticket') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Harga</label>

                                <div class="col-md-4">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="number" class="form-control" name="price" step="50">

                                    @if ($errors->has('price'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
<!-- Villa -->
                        <div class="col-md-9 col-md-offset-1 villa box">
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

                            <div class="form-group{{ $errors->has('village') ? ' has-error' : '' }}">
                                <div class="col-md-6 col-md-offset-4">
                                    <input type="text" class="form-control" name="village" value="Desa Cibodas" disabled>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                                <div class="col-md-6 col-md-offset-4">
                                    <input type="text" class="form-control" name="city" value="Kab. Bandung" disabled>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                                <div class="col-md-6 col-md-offset-4">
                                    <input type="text" class="form-control" name="prov" value="Jawa Barat" disabled>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                                <div class="col-md-6 col-md-offset-4">
                                    <input type="text" class="form-control" name="zipCode" maxlength="5" value="40391" disabled>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('dateOrdered') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Tanggal Sudah Terpesan</label>
                                
                                <div class="col-md-6">
                                    <input class="date form-control" type="text" name="dateOrdered">
                                    <script type="text/javascript">  
                                        $('.date').datepicker({
                                            startDate: "today",
                                            format: "dd/mm/yyyy",
                                            clearBtn: true,
                                            language: "id",
                                            multidate: true,
                                            forceParse: false,
                                            todayHighlight: true,
                                            datesDisabled: ['04/06/2016', '04/21/2016']  
                                         });  
                                    </script>  

                                    @if ($errors->has('stock'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('stock') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>

                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Harga</label>

                                <div class="col-md-6">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="number" class="form-control" name="price" step="50" min="0">

                                    @if ($errors->has('stock'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
<!-- Edukasi -->
                        <div class="col-md-9 col-md-offset-1 edukasi box">

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

                            <div class="form-group{{ $errors->has('village') ? ' has-error' : '' }}">
                                <div class="col-md-6 col-md-offset-4">
                                    <input type="text" class="form-control" name="village" value="Desa Cibodas" disabled>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                                <div class="col-md-6 col-md-offset-4">
                                    <input type="text" class="form-control" name="city" value="Kab. Bandung" disabled>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                                <div class="col-md-6 col-md-offset-4">
                                    <input type="text" class="form-control" name="prov" value="Jawa Barat" disabled>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                                <div class="col-md-6 col-md-offset-4">
                                    <input type="text" class="form-control" name="zipCode" maxlength="5" value="40391" disabled>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('quota') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Kuota</label>

                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="quota" value="{{ old('quota') }}" min="0">

                                    @if ($errors->has('quota'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('quota') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Harga</label>

                                <div class="col-md-4">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="number" class="form-control" name="price" step="50" min="0">

                                    @if ($errors->has('stock'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('dateOrdered') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Tanggal Sudah Terpesan</label>
                                
                                <div class="col-md-4">
                                    <input class="date form-control" type="text" name="dateOrdered">
                                    <script type="text/javascript">  
                                        $('.date').datepicker({
                                            startDate: "today",
                                            format: "dd/mm/yyyy",
                                            clearBtn: true,
                                            language: "id",
                                            multidate: true,
                                            forceParse: false,
                                            todayHighlight: true,
                                            datesDisabled: ['04/06/2016', '04/21/2016']  
                                         });  
                                    </script>  

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

@else
    return view('/');
@endif
@endif

@endsection
