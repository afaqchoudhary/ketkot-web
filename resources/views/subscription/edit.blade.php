@extends('master')

@section('title', 'Subcriptions | Edit')

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
                            <h3 class="box-title">Edit Subscription Packages</h3>


                        </div>
                        <!-- /.box-header -->
                        <div class="container-fluid">

                            <form method="GET" action="{{URL('subscription/index')}}" enctype="multipart/form-data">
                                <div class="box-body">
                                    @csrf
                                    @if (session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" name="mail_driver"
                                                value="{{ old('mail_driver') }}" placeholder="enter title">


                                        </div>
                                    </div>

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>No of Gems </label>
                                            <input type="number" class="form-control" name="host_name"
                                                value="{{ old('host_name') }}" placeholder="enter no of gems">


                                        </div>
                                    </div>

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Price</label>
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
                                            <label>Validity</label>
                                            <select class="form-control select2" name="country_id" style="width: 100%;"
                                                placeholder="select country please">
                                                <option value="">--select validity--</option>
                                                <option value="">1 month</option>
                                                <option value="">3 months</option>
                                                <option value="">6 months</option>
                                            </select>

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