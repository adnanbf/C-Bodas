@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <!-- <div class="panel-body">
                    <h1>File Upload</h1>
                        <form action="{{ URL::to('uploadImageMerchant') }}" method="post" enctype="multipart/form-data">
                            <label>Select image to upload:</label>
                            <input type="file" name="imageMerchant" id="imageMerchant">
                            <input type="submit" value="Upload" name="submit">
                            <input type="hidden" value="{{ csrf_token() }}" name="_token">
                        </form>
                    <div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
