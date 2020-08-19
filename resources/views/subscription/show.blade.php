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
           


            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Subscription List</h3>

                         
                        </div>
                        <!-- /.box-header -->
                        <div class="container-fluid">
                       
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">S.NO</th>
                                        <th class="text-center">TITLE</th>
                                        <th class="text-center">GEMS</th>
                                        <th class="text-center">PRICE</th>
                                        <th class="text-center">VALIDITY</th>
                                        <th class="text-center">NO OF SUBSCRIBERS</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">{{$subscription->subscription_id}}</td>
                                        <td class="text-center">{{$subscription->subscription_title}}</td>
                                        <td class="text-center">{{$subscription->subscription_gems}}</td>
                                        <td class="text-center">{{$subscription->subscription_price}}</td>
                                        <td class="text-center">{{$subscription->subscription_validity}}</td>
                                        <td class="text-center">0</td>

                                        

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