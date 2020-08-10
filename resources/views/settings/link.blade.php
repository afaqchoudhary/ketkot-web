@extends('master')

@section('title', 'Settings | Links')

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
                                            <label>Google Playstore Link</label>
                                            <input type="text" class="form-control" name="mail_driver"
                                                value="{{ old('mail_driver') }}" placeholder="enter google playstore link">


                                        </div>
                                    </div>

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>IOS Link</label>
                                            <input type="text" class="form-control" name="host_name"
                                                value="{{ old('host_name') }}" placeholder="enter ios link">


                                        </div>
                                    </div>

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Facebook Link</label>
                                            <input type="text" class="form-control" name="port_no"
                                                value="{{ old('port_no') }}" placeholder="enter facebook link">


                                        </div>
                                    </div>

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Twitter Link</label>
                                            <input type="text" class="form-control" name="user_name"
                                                value="{{ old('user_name') }}" placeholder="enter twitter link">


                                        </div>
                                    </div>

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Instagram Link</label>
                                            <input type="text" class="form-control" name="password"
                                                value="{{ old('password') }}" placeholder="enter instagram link">


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