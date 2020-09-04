@extends('master')

@section('title', 'Gems | Edit')

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
        <div class="col-md-8">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Edit Gems</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{route('gem.update',$gems->gem_id)}}" enctype="multipart/form-data">
                    @csrf
                    @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <div class="container-fluid">


                        <div class="box-body">
                            @csrf

                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group">
                                    <label>Gems Package name </label>
                                    <input type="text" class="form-control" name="gem_title"
                                        value="{{ old('gem_title',$gems->gem_title) }}"
                                        placeholder="enter gems package name ">
                                    @if ($errors->has('gem_title'))
                                    <div class="danger">{{ $errors->first('gem_title') }}</div>
                                    @endif


                                </div>
                            </div>

                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group">
                                    <label>Gems Count </label>
                                    <input type="number" class="form-control" name="gem_count"
                                        value="{{ old('gem_count',$gems->gem_count) }}" placeholder="enter no of gems">

                                    @if ($errors->has('gem_count'))
                                    <div class="danger">{{ $errors->first('gem_count') }}</div>
                                    @endif

                                </div>
                            </div>

                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group">
                                    <label>Gem Package Price</label>
                                    <input type="number" class="form-control" name="gem_price"
                                        value="{{ old('gem_price',$gems->gem_price) }}" placeholder="enter price">

                                    @if ($errors->has('gem_price'))
                                    <div class="danger">{{ $errors->first('gem_price') }}</div>
                                    @endif

                                </div>
                            </div>

                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group">
                                    <label>Platform</label>
                                    <div><input type="radio" name="platform" id="platform" value="android"
                                            checked>Android</div>

                                    <input type="radio" name="platform" id="platform" value="ios" checked>Ios


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
                    <h3 class="box-title">Edit Gem Icon</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <img class="profile-user-img img-responsive"
                    src="{{URL::asset($gems->gem_icon_path.$gems->gem_icon_name)}}" alt="gem icon picture"
                    style="width: 100%; height: 300px">
                <div class="card-footer text-center">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#gem_image_modal{{$gems->gem_id}}">
                        Update Gem Icon
                    </button>
                </div>
            </div>
        </div>

        <!--model for update logo start-->
        <div class="modal fade" id="gem_image_modal{{$gems->gem_id}}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Gem Icon Image</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{route('gemicon.update',$gems->gem_id)}}"
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
                                                name="gem_icon">
                                            @if ($errors->has('gem_icon'))
                                            <div class="danger">{{ $errors->first('gem_icon') }}</div>
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