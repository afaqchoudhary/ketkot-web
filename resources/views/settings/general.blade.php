@extends('master')

@section('title', 'Settings | General')

@section('content')

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

            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">General Settings</h3>


                        </div>
                        <!-- /.box-header -->
                        <div class="container-fluid">

                            <form method="POST" action="" enctype="multipart/form-data">
                                <div class="box-body">
                                    @csrf
                                    @if (session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif

                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label>Site Name</label>
                                            <input type="text" class="form-control" name="mail_driver"
                                                value="{{ old('mail_driver') }}" placeholder="enter site name">


                                        </div>
                                    </div>

                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label>Home Page Title</label>
                                            <input type="text" class="form-control" name="host_name"
                                                value="{{ old('host_name') }}" placeholder="enter home page title">


                                        </div>
                                    </div>

                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label>Meta Title</label>
                                            <input type="text" class="form-control" name="port_no"
                                                value="{{ old('port_no') }}" placeholder="enter meta title">


                                        </div>
                                    </div>

                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label>Free Gems On Signup</label>
                                            <input type="number" class="form-control" name="user_name"
                                                value="{{ old('user_name') }}" placeholder="enter no of gems">


                                        </div>
                                    </div>

                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label>Gems on Invite Friends</label>
                                            <input type="number" class="form-control" name="password"
                                                value="{{ old('password') }}" placeholder="enter no of gems">


                                        </div>
                                    </div>


                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label>Gems on watching Ads</label>
                                            <input type="number" class="form-control" name="password"
                                                value="{{ old('password') }}" placeholder="enter no of ads">


                                        </div>
                                    </div>


                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label>Commission (Gifts to gems in %)</label>
                                            <input type="number" class="form-control" name="password"
                                                value="{{ old('password') }}" placeholder="enter commission percentage">


                                        </div>
                                    </div>

                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label>Video Calls</label>
                                            <input type="number" class="form-control" name="password"
                                                value="{{ old('password') }}" placeholder="enter no of video calls">


                                        </div>
                                    </div>

                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label>Schedule Video ads (in mins)</label>
                                            <input type="text" class="form-control" name="password"
                                                value="{{ old('password') }}" placeholder="enter no of mins">


                                        </div>
                                    </div>



                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label>Watch Video & Earn</label>
                                            <div><input type="radio" name="optionsRadios" id="optionsRadios1"
                                                    value="option1" checked>Enable</div>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"
                                                checked>Disable


                                        </div>
                                    </div>


                                    <div class="col-md-6 ">
                                        <div class="form-group-prepend">
                                            <label>Gems reduction</label>
                                            <input type="number" class="form-control" name="password"
                                                value="{{ old('password') }}" placeholder="prime">
                                            <input type="number" class="form-control" name="password"
                                                value="{{ old('password') }}" placeholder="non-prime">


                                        </div>
                                    </div>

                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label>Push Notification key</label>
                                            <input type="number" class="form-control" name="password"
                                                value="{{ old('password') }}" placeholder="non-prime">

                                        </div>
                                    </div>

                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label>Contact Mail Id</label>
                                            <input type="text" class="form-control" name="password"
                                                value="{{ old('password') }}" placeholder="enter contact mail">

                                        </div>
                                    </div>

                                  

                                  

                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label>Copyrights Text</label>
                                            <input type="text" class="form-control" name="password"
                                                value="{{ old('password') }}" placeholder="enter coprights text">

                                        </div>
                                    </div>

                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label>Locations</label>
                                            <select class="form-control select2" name="country_id" style="width: 100%;"
                                                placeholder="select country please">
                                                <option value="">--select location--</option>
                                                <option value="">Albania</option>
                                                <option value="">Austrailia</option>
                                                <option value="">Austria</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label>Welcome Message</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>

                                        </div>
                                    </div>

                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label>Google analytics</label>
                                            <textarea class="form-control" rows="6" placeholder="Enter ..."></textarea>

                                        </div>
                                    </div>

                                </div>

                                <div class="box-footer text-center">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>



                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>



            </div>
            <!--/.col (left) -->
            <!-- right column -->

            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div>
</section>
<!-- /.content -->

@endsection