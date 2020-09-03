@extends('master')

@section('title', 'Gems | Index')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Gem Packages
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
                <form method="GET" action="{{route('gem.index')}}">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group">
                                    <label for="gem_title">Package Name</label>
                                    <input type="text" class="form-control" id="gem_title" name="gem_title"
                                        placeholder="search by package name">
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
                            <h3 class="box-title">Package List</h3>


                        </div>
                        <!-- /.box-header -->
                        <div class="container-fluid">
                            @if ($gems->count() > 0)
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">S.NO</th>
                                        <th class="text-center">PACKAGE NAME</th>
                                        <th class="text-center">ICON</th>
                                        <th class="text-center">GEMS</th>
                                        <th class="text-center">PRICE</th>
                                        <th class="text-center">NO OF USAGE</th>
                                        <th class="text-center">VIEW</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($gems as $gem)
                                    <tr>
                                        <td class="text-center">{{$gem->gem_id}}</td>
                                        <td class="text-center">{{$gem->gem_title}}</td>
                                        <td class="text-center"><img
                                                src="{{URL::asset($gem->gem_icon_path.$gem->gem_icon_name)}}"
                                                class="img-circle" style="height:20px; width:20px"></td>
                                        <td class="text-center">{{$gem->gem_count}}</td>
                                        <td class="text-center">{{$gem->gem_price}}</td>
                                        <td class="text-center">0</td>

                                        <td class="text-center">

                                            <a href="{{route('gem.edit',$gem->gem_id)}}" class="btn btn-primary">
                                                <i class="fa fa-edit">
                                                </i>
                                            </a>
                                            <a class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-default{{$gem->gem_id}}">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                        <div class="modal fade" id="modal-default{{$gem->gem_id}}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;
                                                            </span>
                                                        </button>
                                                        <h4 class="modal-title">Delete Gems Package
                                                        </h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Do you want to delete this Gems Package?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default pull-left"
                                                            data-dismiss="modal">No</button>
                                                        <a href="{{route('gem.delete',$gem->gem_id)}}" type="submit"
                                                            class="btn btn-primary">
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

                            {{$gems->links()}}
                            @else
                            <h3 class="text-center">no gems packages found</h3>
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