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
        <!-- left column -->
        <div class="col-md-12">

            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">New Gem Package</h3>


                        </div>
                        <!-- /.box-header -->
                        <div class="container-fluid">

                            <form method="GET" action="{{URL('gem/index')}}" enctype="multipart/form-data">
                                <div class="box-body">
                                    @csrf
                                    @if (session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Gems Package name </label>
                                            <input type="text" class="form-control" name="mail_driver"
                                                value="{{ old('mail_driver') }}" placeholder="enter gems package name ">


                                        </div>
                                    </div>

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Gems Count </label>
                                            <input type="number" class="form-control" name="host_name"
                                                value="{{ old('host_name') }}" placeholder="enter no of gems">


                                        </div>
                                    </div>

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Gem Package Price</label>
                                            <input type="number" class="form-control" name="port_no"
                                                value="{{ old('port_no') }}" placeholder="enter price">


                                        </div>
                                    </div>

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Platform</label>
                                            <div><input type="radio" name="optionsRadios" id="optionsRadios1"
                                                    value="option1" checked>Android</div>

                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"
                                                checked>Ios


                                        </div>
                                    </div>

                                   
                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group">
                                    <label>Gem Package icon </label>
                                    <input type="file" class="form-control" name="footer_logo">
                                    @if ($errors->has('footer_logo'))
                                    <div class="danger">{{ $errors->first('footer_logo') }}</div>
                                    @endif
                                </div>
                            </div>
                       



                                </div>

                                <div class="box-footer text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
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