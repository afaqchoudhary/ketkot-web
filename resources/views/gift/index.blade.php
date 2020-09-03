@extends('master')

@section('title', 'Gifts | Index')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Gift Packs
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
                <form method="GET" action="{{route('gift.index')}}">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Gift Title</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="gift_title"
                                        placeholder="search by gift title">
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
                            <h3 class="box-title">Gift Packs List</h3>


                        </div>
                        <!-- /.box-header -->
                        <div class="container-fluid">
                            @if ($gifts->count() > 0)
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">S.NO</th>
                                        <th class="text-center">GIFT TITLE</th>
                                        <th class="text-center">HOMEICON</th>
                                        <th class="text-center">PRIME GEMS</th>
                                        <th class="text-center">NON-PRIME GEMS</th>
                                        <th class="text-center">HOMEVIEW</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($gifts as $gift)
                                    <tr>
                                        <td class="text-center">{{$gift->gift_id}}</td>
                                        <td class="text-center">{{$gift->gift_title}}</td>
                                        <td class="text-center"><img
                                                src="{{URL::asset($gift->gift_icon_path.$gift->gift_icon_name)}}"
                                                class="img-circle" style="height:20px; width:20px"></td>
                                        <td class="text-center">{{$gift->gift_gems_prime}}</td>
                                        <td class="text-center">{{$gift->gift_gems}}</td>

                                        <td class="text-center">

                                            <a href="{{route('gift.edit',$gift->gift_id)}}" class="btn btn-primary">
                                                <i class="fa fa-edit">
                                                </i>
                                            </a>
                                            <a class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-default{{$gift->gift_id}}">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                        <div class="modal fade" id="modal-default{{$gift->gift_id}}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;
                                                            </span>
                                                        </button>
                                                        <h4 class="modal-title">Delete Gift Package
                                                        </h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Do you want to delete this gift package?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default pull-left"
                                                            data-dismiss="modal">No</button>
                                                        <a href="{{route('gift.delete',$gift->gift_id)}}" type="submit"
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
                            {{$gifts->links()}}
                            @else
                            <h3 class="text-center">no gifts packages found</h3>
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