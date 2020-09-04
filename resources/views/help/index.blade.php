@extends('master')

@section('title', 'Help | Index')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Helps Information
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
                <form method="GET" action="{{route('help.index')}}">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group">
                                    <label for="help_title">Title</label>
                                    <input type="text" class="form-control" id="help_title" name="help_title"
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
                            <h3 class="box-title">Helps List</h3>


                        </div>
                        <!-- /.box-header -->
                        <div class="container-fluid">
                            @if ($helps->count() > 0)
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">S.NO</th>
                                        <th class="text-center">TITLE</th>
                                        <th class="text-center">VIEW</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($helps as $help)
                                    <tr>
                                        <td class="text-center">{{$help->help_info_id}}</td>
                                        <td class="text-center">{{$help->help_title}}</td>
                                        <td class="text-center">

                                            <a href="{{route('help.show',$help->help_info_id)}}"
                                                class="btn btn-primary">
                                                <i class="fa fa-eye">
                                                </i>
                                            </a>
                                            <a href="{{route('help.edit',$help->help_info_id)}}"
                                                class="btn btn-primary">
                                                <i class="fa fa-edit">
                                                </i>
                                            </a>

                                        </td>


                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{$helps->links()}}
                            @else
                            <h3 class="text-center">no help info found</h3>
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