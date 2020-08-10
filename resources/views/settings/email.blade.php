@extends('master')

@section('title', 'Settings | Emails')

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
                            <h3 class="box-title">Email Settings</h3>


                        </div>
                        <!-- /.box-header -->
                        <div class="container-fluid">

                            <form method="POST" action="" enctype="multipart/form-data">
                                <div class="box-body">
                                    @csrf
                                    @if (session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Mail driver</label>
                                            <input type="text" class="form-control" name="mail_driver"
                                                value="{{ old('mail_driver') }}" placeholder="enter mail driver">


                                        </div>
                                    </div>

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Host Name</label>
                                            <input type="text" class="form-control" name="host_name"
                                                value="{{ old('host_name') }}" placeholder="enter host name">


                                        </div>
                                    </div>

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Port No</label>
                                            <input type="text" class="form-control" name="port_no"
                                                value="{{ old('port_no') }}" placeholder="enter port number">


                                        </div>
                                    </div>

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" name="user_name"
                                                value="{{ old('user_name') }}" placeholder="enter username">


                                        </div>
                                    </div>

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" class="form-control" name="password"
                                                value="{{ old('password') }}" placeholder="enter password">


                                        </div>
                                    </div>

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>SSL Encryption</label>
                                            <div><input type="radio" name="optionsRadios" id="optionsRadios1"
                                                    value="option1" checked>Enable</div>

                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"
                                                checked>Disable


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