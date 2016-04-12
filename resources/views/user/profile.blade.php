@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Profil {{Auth::user()->name}}</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/user/editProfile">

                        <div class="form-group">
                            <label class="col-md-4" align="right">Nama</label>
                            <div class="col-md-6">{{Auth::user()->name}}</div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4" align="right">Alamat E-Mail</label>
                            <div class="col-md-6">{{Auth::user()->email}}</div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4" align="right">Telepon</label>
                            <div class="col-md-6">{{Auth::user()->telp}}</div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4" align="right">Alamat</label>
                            <div class="col-md-6">{{Auth::user()->street}}</div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">{{Auth::user()->city}}</div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">{{Auth::user()->prov}}</div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">{{Auth::user()->zipCode}}</div>
                        </div>

@foreach($users as $user)

    <p>{{$user-> name}}</p>
    <p>{{$user-> email}}</p>
    <hr>

@endforeach

                        <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                        <button type="submit" class="btn btn-primary" name="submit" value="">
                            <i class="fa fa-btn fa-user"></i>Edit Profile
                        </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
