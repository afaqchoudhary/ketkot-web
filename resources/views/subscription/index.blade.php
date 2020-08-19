@extends('master')

@section('title', 'Subcriptions | Index')

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Manage Subscriptions
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
                <form method="GET" action="#">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">TITLE</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="category_name"
                                        placeholder="enter title">
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
                            <h3 class="box-title">Subscription List</h3>

                         
                        </div>
                        <!-- /.box-header -->
                        <div class="container-fluid">
                        @if ($subcriptions->count() > 0)
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">S.NO</th>
                                        <th class="text-center">TITLE</th>
                                        <th class="text-center">GEMS</th>
                                        <th class="text-center">PRICE</th>
                                        <th class="text-center">VALIDITY</th>
                                        <th class="text-center">NO OF SUBSCRIBERS</th>
                                        <th class="text-center">VIEW</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($subcriptions as $subcription)
                                    <tr>
                                        <td class="text-center">{{$subcription->subscription_id}}</td>
                                        <td class="text-center">{{$subcription->subscription_title}}</td>
                                        <td class="text-center">{{$subcription->subscription_gems}}</td>
                                        <td class="text-center">{{$subcription->subscription_price}}</td>
                                        <td class="text-center">{{$subcription->subscription_validity}}</td>
                                        <td class="text-center">0</td>

                                        <td class="text-center">
                                            <a href="{{route('subscription.show',$subcription->subscription_id)}}" class="btn btn-primary">
                                                <i class="fa fa-eye">
                                                </i>
                                            </a>
                                            <a href="{{route('subscription.edit',$subcription->subscription_id)}}" class="btn btn-primary">
                                                <i class="fa fa-edit">
                                                </i>
                                            </a>
                                            <a class="btn btn-primary" data-toggle="modal" data-target="#modal-default{{$subcription->subscription_id}}">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                        <div class="modal fade" id="modal-default{{$subcription->subscription_id}}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;
                                                            </span>
                                                        </button>
                                                        <h4 class="modal-title">Delete Subscription
                                                        </h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Do you want to delete this Subscription?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default pull-left"
                                                            data-dismiss="modal">No</button>
                                                        <a href="{{route('subscription.delete',$subcription->subscription_id)}}" type="submit" class="btn btn-primary">
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
                                {{$subcriptions->links()}}
                                @else
                                <h3 class="text-center">no subcriptions found</h3>
                                @endif
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