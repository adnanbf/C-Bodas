@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Lapak</div>

                <div class="panel-body">
                    Hai, {{Auth::user()->name}}
                    <div>
                        <a href="{{ url('merchant/create') }}" class="btn btn-warning btn-sm">Lapak Baru</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
