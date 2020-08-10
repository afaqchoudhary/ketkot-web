@extends('master')

@section('title', 'Settings | Ads')

@section('content')

<!-- Content Header (Page header) -->
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
                            <h3 class="box-title">Ads Settings</h3>

                            
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
                                <label>Google Ads</label>
                                <div><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Enable</div>
                                
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Disable
                               

                            </div>
                        </div>

                        <div class="col-md-4 col-md-offset-4">
                            <div class="form-group">
                                <label>Adsense Key</label>
                                <input type="text" class="form-control" name="country_code"
                                    value="{{ old('country_code') }}" placeholder="enter adsense key">
                               

                            </div>
                        </div>

                        <div class="col-md-4 col-md-offset-4">
                            <div class="form-group">
                                <label>Video Adsense Key</label>
                                <input type="text" class="form-control" name="country_code"
                                    value="{{ old('country_code') }}" placeholder="enter video adsense key">
                              

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
                    <!-- /.box -->
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