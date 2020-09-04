@extends('master')

@section('title', 'Sliders | Index')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Sliders
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
                    <h3 class="box-title">Search</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="GET" action="{{route('slider.index')}}">
                    <div class=" box-body">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group">
                                    <label for="slider_title">Title</label>
                                    <input type="text" class="form-control" id="slider_title" name="slider_title"
                                        placeholder="search by title">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer text-center">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->


            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Sliders List</h3>


                        </div>
                        <!-- /.box-header -->
                        <div class="container-fluid">
                            @if ($sliders->count() > 0)
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">S.NO</th>
                                        <th class="text-center">TITLE</th>
                                        <th class="text-center">IMAGE</th>
                                        <th class="text-center">VIEW</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sliders as $slider)
                                    <tr>
                                        <td class="text-center">{{$slider->slider_id}}</td>
                                        <td class="text-center">{{$slider->slider_title}}</td>
                                        <td class="text-center"><img
                                                src="{{URL::asset($slider->slider_image_path.$slider->slider_image_name)}}"
                                                class="img-circle" style="height:40px; width:40px"></td>

                                        <td class="text-center">
                                            <a href="{{route('slider.show',$slider->slider_id)}}"
                                                class="btn btn-primary">
                                                <i class="fa fa-eye">
                                                </i>
                                            </a>

                                            <a href="{{route('slider.edit',$slider->slider_id)}}"
                                                class="btn btn-primary">
                                                <i class="fa fa-edit">
                                                </i>
                                            </a>
                                            <a class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-default{{$slider->slider_id}}">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                        <div class="modal fade" id="modal-default{{$slider->slider_id}}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;
                                                            </span>
                                                        </button>
                                                        <h4 class="modal-title">Delete Slider
                                                        </h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Do you want to delete this slider ?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default pull-left"
                                                            data-dismiss="modal">No</button>
                                                        <a href="{{route('slider.delete',$slider->slider_id)}}"
                                                            type="submit" class="btn btn-primary">
                                                            Yes</a>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->

                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>

                            {{$sliders->links()}}
                            @else
                            <h3 class="text-center">no sliders found</h3>
                            @endif


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