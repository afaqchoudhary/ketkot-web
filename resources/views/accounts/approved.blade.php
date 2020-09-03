@extends('master')

@section('title', 'Accounts | Approved')

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
                <form method="GET" action="#">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="user_group"
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

                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Fazle</td>
                                        <td class="text-center">27</td>
                                        <td class="text-center">male</td>
                                        <td class="text-center">Jul 12, 13:20 pm</td>
                                        <td class="text-center"> <label class="switch">
                                                <input data-id="" class="is-group-active" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                    data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br>
                                            </label></td>
                                        <td class="text-center"><a href="{{URL('accounts/show')}}"
                                                class="btn btn-primary">
                                                <i class="fa fa-eye">
                                                </i>
                                            </a></td>


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