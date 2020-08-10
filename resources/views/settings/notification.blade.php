@extends('master')

@section('title', 'Settings | Notifications')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Media Settings
        <small>Preview</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Data</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action="#" enctype="multipart/form-data">
                    <div class="box-body">
                        @csrf
                        @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif


                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <label>Voip key</label>
                                    <input type="file" class="form-control" name="header_logo">
                                    @if ($errors->has('header_logo'))
                                    <div class="danger">{{ $errors->first('header_logo') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <label>Voip Certificate </label>
                                    <input type="file" class="form-control" name="footer_logo">
                                    @if ($errors->has('footer_logo'))
                                    <div class="danger">{{ $errors->first('footer_logo') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <label>Voip Certificate </label>
                                    <input type="file" class="form-control" name="footer_logo">
                                    @if ($errors->has('footer_logo'))
                                    <div class="danger">{{ $errors->first('footer_logo') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-group">
                                <label>Voip PassPharse</label>
                                <input type="text" class="form-control" name="password" value="{{ old('password') }}"
                                    placeholder="enter voip passphrase">

                            </div>
                        </div>
                        </div>



                        <div class="box-footer text-center">
                            <button type="button" class="btn btn-primary">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->

        <!--/.col (right) -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->

@endsection