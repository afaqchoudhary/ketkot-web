@extends('master')

@section('title', 'Accounts | Pending')

@section('content')

<!-- Content Header (Page header) -->
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
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Search</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="GET" action="{{route('pending.accounts')}}">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="account_name"
                                        placeholder="search by name">
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
                            <h3 class="box-title">Account List</h3>


                        </div>
                        <!-- /.box-header -->
                        <div class="container-fluid">
                            @if ($accounts->count() > 0)
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">S.NO</th>
                                        <th class="text-center">NAME</th>
                                        <th class="text-center">AGE</th>
                                        <th class="text-center">GENDER</th>
                                        <th class="text-center">CREATED AT</th>
                                        <th class="text-center">Actions</th>
                                        <th class="text-center">VIEW</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($accounts as $account)
                                    <tr>
                                        <td class="text-center">{{$account->id}}</td>
                                        <td class=" text-center">{{$account->account_name}}</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">{{$account->account_gender}}</td>
                                        <td class="text-center">{{$account->created_at}}</td>
                                        <td class="text-center"> <label class="switch">
                                                <input data-id="{{$account->id}}" class="is-account-active"
                                                    type="checkbox" data-onstyle="success" data-offstyle="danger"
                                                    data-toggle="toggle" data-on="Active" data-off="InActive"
                                                    {{ $account->is_blocked ? 'checked' : '' }}>
                                                <span class="slider round"></span>
                                                </br>
                                            </label></td>
                                        <td class="text-center"><a href="{{route('show.accounts',$account->id)}}"
                                                class="btn btn-primary">
                                                <i class="fa fa-eye">
                                                </i>
                                            </a></td>


                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{$accounts->links()}}
                            @else
                            <h3 class="text-center">no accounts found</h3>
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