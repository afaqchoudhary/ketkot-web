@extends('master')

@section('title', 'Help | Add')

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
                            <h3 class="box-title">New Help page </h3>


                        </div>
                        <!-- /.box-header -->
                        <div class="container-fluid">

                            <form method="POST" action="{{route('help.store')}}" enctype="multipart/form-data">
                                <div class="box-body">
                                    @csrf
                                    @if (session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif

                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" name="help_title"
                                                value="{{ old('help_title') }}" placeholder="enter title ">

                                        </div>
                                    </div>

                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="textarea" placeholder="Place some text here"
                                                name="help_description"
                                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

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