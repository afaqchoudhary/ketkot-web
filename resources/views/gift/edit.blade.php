@extends('master')

@section('title', 'Gift | Edit')

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
                    <h3 class="box-title">Edit Gift</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{route('gift.update',$gifts->gift_id)}}" enctype="multipart/form-data">
                    @csrf
                    @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <div class="container-fluid">


                        <div class="box-body">
                            @csrf

                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group">
                                    <label>Gift Package name </label>
                                    <input type="text" class="form-control" name="gift_title"
                                        value="{{ old('gift_title',$gifts->gift_title) }}"
                                        placeholder="enter gift package name ">
                                    @if ($errors->has('gift_title'))
                                    <div class="danger">{{ $errors->first('gift_title') }}</div>
                                    @endif


                                </div>
                            </div>

                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group">
                                    <label>Gems Count </label>
                                    <input type="number" class="form-control" name="gift_gems_prime"
                                        value="{{ old('gift_gems_prime',$gifts->gift_gems_prime) }}"
                                        placeholder="enter no of gems">

                                    @if ($errors->has('gift_gems_prime'))
                                    <div class="danger">{{ $errors->first('gift_gems_prime') }}</div>
                                    @endif

                                </div>
                            </div>

                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group">
                                    <label>Gem Package Price</label>
                                    <input type="number" class="form-control" name="gift_gems"
                                        value="{{ old('gift_gems',$gifts->gift_gems) }}" placeholder="enter gems">

                                    @if ($errors->has('gift_gems'))
                                    <div class="danger">{{ $errors->first('gift_gems') }}</div>
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
                    <h3 class="box-title">Edit Gift Icon</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <img class="profile-user-img img-responsive"
                    src="{{URL::asset($gifts->gift_icon_path.$gifts->gift_icon_name)}}" alt="gift icon picture"
                    style="width: 100%; height: 300px">
                <div class="card-footer text-center">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#gem_image_modal">
                        Update Gem Icon
                    </button>
                </div>
            </div>
        </div>

        <!--model for update logo start-->
        <div class="modal fade" id="gem_image_modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Gem Icon Image</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{route('gifticon.update',$gifts->gift_id)}}"
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
                                                name="gift_icon">
                                            @if ($errors->has('gift_icon'))
                                            <div class="danger">{{ $errors->first('gift_icon') }}</div>
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