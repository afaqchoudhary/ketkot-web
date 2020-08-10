@extends('master')

@section('title', 'Payments')

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
                                    <label for="exampleInputEmail1">Date</label>
                                    <input type="date" class="form-control" id="exampleInputEmail1" name="user_group"
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
                            <h3 class="box-title">Payment List</h3>

                            
                        </div>
                        <!-- /.box-header -->
                        <div class="container-fluid">

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">S.NO</th>
                                        <th class="text-center">USER</th>
                                        <th class="text-center">PAID FOR</th>
                                        <th class="text-center">PAID AMOUNT</th>
                                        <th class="text-center">PAID ON</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">AV Tester</td>
                                        <td class="text-center">gems</td>
                                        <td class="text-center">USD US$ 0.99</td>
                                        <td class="text-center">Apr 02, 04:01 pm</td>
                                       
                                      

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