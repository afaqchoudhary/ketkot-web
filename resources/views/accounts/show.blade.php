@extends('master')

@section('title', 'Accounts | Show')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        View Account
        <small>Preview</small>
    </h1>



</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 ">
                <div class="box">
                    <div class="box-body">

                        <div class="media align-center">
                            <div style="float: left;">
                                <img src="{{URL::asset('style/dist/img/user2-160x160.jpg')}}"
                                    style="width: 80px; height:80px;" class="img-circle" alt="user image">
                            </div>

                            <div>
                                <h3>{{$accounts->account_name}}</h3>
                                <span><img src="{{URL::asset('style/dist/img/diamond.png')}}" alt="icon image"
                                        style="width:20px; height:20px;"> 200</span>
                            </div>

                        </div>




                        <div style="margin-top: 20px;">
                            <div style="float: left; text-align: center;width: 49%;">
                                <span class=" ">
                                    <i class="fa fa-users fa-3x"></i>
                                </span>
                                <h3>{{$accounts->account_followers_count}}</h3>
                                <p>Follower</p>
                            </div>
                            <div style=" text-align: center;width: 49%;float: right;">
                                <span class=" ">
                                    <i class="fa fa-user-plus fa-3x"></i>
                                </span>
                                <h3>{{$accounts->account_following_count}}</h3>
                                <p>Following</p>
                            </div>
                        </div>
                        <div style="width: 20%;margin-left: auto;margin-right: auto;">
                            <span class="badge bg-green">Active</span>
                        </div>

                        <h3>
                            About
                        </h3>
                        <p>sdasdasdasdasdasdasdasd</p>








                        <table class="table">

                            <tr>
                                <td class="text-center">Age</td>
                                <td class="text-center">26</td>
                            </tr>

                            <tr>
                                <td class="text-center">Birth Date</td>
                                <td class="text-center">{{$accounts->account_birthday}}</td>
                            </tr>

                            <tr>
                                <td class="text-center">Gender</td>
                                <td class="text-center">{{$accounts->account_gender}}</td>
                            </tr>

                            <tr>
                                <td class="text-center">Location</td>
                                <td class="text-center">{{$accounts->account_country}}</td>
                            </tr>


                        </table>



                    </div>

                </div>
            </div>
            <div class="col-md-8">
                <div class="box">

                    <div class="box-body">
                        <form action="" class="form-profile" method="get" onsubmit="return validatemsg()">
                            <div class="form-group">
                                <textarea class="form-control" name="msg" id="msg" cols="30" rows="5"
                                    placeholder="Type new notification message" style="background: rgba(0, 0, 0, 0.4);"
                                    spellcheck="false"></textarea>
                                <span class="text-danger" id="msgerr"></span>
                            </div>
                            <div class="align-items-center">
                                <button class="btn btn-primary px-3">Send</button>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Device Details</h3>


                    </div>
                    <div class="box-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">DEVICE MODEL</th>
                                    <th class="text-center">TYPE</th>
                                    <th class="text-center">LOGGED IN</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">Nokia 3310</td>
                                    <td class="text-center"><span class="badge bg-red">Android</span></td>
                                    <td class="text-center">1-5-1985</td>

                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>



            </div>
        </div>
    </div>
</section>
<!-- /.content -->

@endsection