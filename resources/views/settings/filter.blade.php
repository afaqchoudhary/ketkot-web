@extends('master')

@section('title', 'Settings | Filters')

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
                            <h3 class="box-title">Filter Settings</h3>


                        </div>
                        <!-- /.box-header -->
                        <div class="container-fluid">

                            <form method="POST" action="" enctype="multipart/form-data">
                                <div class="box-body">
                                    @csrf
                                    @if (session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif

                                    <div class="col-md-3 ">
                                        <div class="form-group row">
                                            <label>Age</label>
                                            <div><label><input type="checkbox">Prime</label></div> 
                                            <label><input type="checkbox">Non-Prime</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 ">
                                        <div class="form-group row">
                                            <label>Location</label>
                                            <div><label><input type="checkbox">Prime</label></div> 
                                            <label><input type="checkbox">Non-Prime</label>


                                        </div>
                                    </div>

                                    <div class="col-md-3 ">
                                        <div class="form-group row">
                                            <label>Gender</label>
                                            <div><label><input type="checkbox">Prime</label></div> 
                                            <label><input type="checkbox">Non-Prime</label>


                                        </div>
                                    </div>

                                    <div class="col-md-3 ">
                                        <div class="form-group row">
                                            <label>Back-Camera</label>
                                            <div><label><input type="checkbox">Prime</label></div> 
                                            <label><input type="checkbox">Non-Prime</label>


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