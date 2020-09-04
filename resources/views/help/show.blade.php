@extends('master')

@section('title', 'Help | View')

@section('content')

<section class="content-header">
    <h1>
        View Help Query
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
                            <h3 class="box-title">Help Query</h3>


                        </div>
                        <!-- /.box-header -->
                        <div class="container-fluid">


                            <div class="box-body">
                                @csrf
                                @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif

                                <div class="col-md-12 ">

                                    <label>{{$help->help_title}}</label>



                                </div>

                                <div class="col-md-12 ">

                                    <p>{{$help->help_description}}</p>

                                </div>



                            </div>


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