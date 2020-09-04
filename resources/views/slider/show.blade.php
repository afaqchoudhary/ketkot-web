@extends('master')

@section('title', 'Sliders | Show')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Sliders Show
        <small>Preview</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->



            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Sliders List</h3>


                        </div>
                        <!-- /.box-header -->
                        <div class="container-fluid">

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">S.NO</th>
                                        <th class="text-center">TITLE</th>
                                        <th class="text-center">IMAGE</th>


                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <th class="text-center">{{$sliders->slider_id}}</th>
                                        <th class="text-center">{{$sliders->slider_title}}</th>
                                        <td class="text-center"><img
                                                src="{{URL::asset($sliders->slider_image_path.$sliders->slider_image_name)}}"
                                                class="img-circle" style="height:80px; width:80px"></td>

                                    </tr>


                                </tbody>
                            </table>




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