@extends('master')

@section('title', 'Slider | Edit')

@section('content')

<section class="content-header">
    <h1>
        Sliders
        <small>Preview</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Edit Slider</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{route('slider.update',$sliders->slider_id)}}"
                    enctype="multipart/form-data">
                    @csrf
                    @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <div class="container-fluid">


                        <div class="box-body">
                            @csrf

                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group">
                                    <label>Slider Title</label>
                                    <input type="text" class="form-control" name="slider_title"
                                        value="{{ old('slider_title',$sliders->slider_title) }}"
                                        placeholder="enter slider title ">
                                    @if ($errors->has('slider_title'))
                                    <div class="danger">{{ $errors->first('slider_title') }}</div>
                                    @endif


                                </div>
                            </div>


                        </div>

                        <div class="box-footer text-center">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>



                    </div>
                    <!-- /.box-body -->


                </form>
            </div>

        </div>
        <div class="col-md-4">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Edit Slider Image</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <img class="profile-user-img img-responsive"
                    src="{{URL::asset($sliders->slider_image_path.$sliders->slider_image_name)}}"
                    alt="slider icon picture" style="width: 100%; height: 300px">
                <div class="card-footer text-center">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#slider_image_modal{{$sliders->slider_id}}">
                        Update slider Icon
                    </button>
                </div>
            </div>
        </div>

        <!--model for update logo start-->
        <div class="modal fade" id="slider_image_modal{{$sliders->slider_id}}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Slider Image</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{route('sliderImage.update',$sliders->slider_id)}}"
                            enctype="multipart/form-data">
                            <div class="box-body">
                                @csrf
                                @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Icon Image</label>
                                            <input type="file" accept="image/x-png,image/jpeg" class="form-control"
                                                name="slider_image">
                                            @if ($errors->has('slider_image'))
                                            <div class="danger">{{ $errors->first('slider_image') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left"
                                    data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--model for update logo end-->
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->

@endsection