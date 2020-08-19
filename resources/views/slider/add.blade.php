@extends('master')

@section('title', 'Sliders | Add')

@section('content')

<section class="content-header">
    <h1>
        Group
        <small>Preview</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">

            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">New Prime Benefit slider</h3>


                        </div>
                        <!-- /.box-header -->
                        <div class="container-fluid">

                            <form method="GET" action="{{URL('slider/index')}}" enctype="multipart/form-data">
                                <div class="box-body">
                                    @csrf
                                    @if (session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Slider Title </label>
                                            <input type="text" class="form-control" name="slider_title"
                                                value="{{ old('slider_title') }}" placeholder="enter slider title ">
                                                @if ($errors->has('slider_title'))
                                    <div class="danger">{{ $errors->first('slider_title') }}</div>
                                    @endif

                                        </div>
                                    </div>

                                   
                                   
                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group">
                                    <label>Slider Image</label>
                                    <input type="file" class="form-control" name="footer_logo">
                                    @if ($errors->has('footer_logo'))
                                    <div class="danger">{{ $errors->first('footer_logo') }}</div>
                                    @endif
                                </div>
                            </div>
                       
                            <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Slider Description</label>
                                            <input type="text" class="form-control" name="host_name"
                                                value="{{ old('host_name') }}" placeholder="enter slider description">
                                                @if ($errors->has('host_name'))
                                    <div class="danger">{{ $errors->first('host_name') }}</div>
                                    @endif

                                        </div>
                                    </div>



                                </div>

                                <div class="box-footer text-center">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>



                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>



            </div>
            <!--/.col (left) -->
            <!-- right column -->

            <!--/.col (right) -->
        </div>
        <!-- /.row -->
</section>
<!-- /.content -->

@endsection