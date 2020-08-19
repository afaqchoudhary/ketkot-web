@extends('master')

@section('title', 'Subcriptions | Add')

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
                            <h3 class="box-title">New Subscription Packages</h3>


                        </div>
                        <!-- /.box-header -->
                        <div class="container-fluid">

                            <form method="POST" action="{{route('subscription.store')}}" enctype="multipart/form-data">
                                <div class="box-body">
                                    @csrf
                                    @if (session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" name="subscription_title"
                                                value="{{ old('subscription_title') }}" placeholder="enter title">
                                                @if ($errors->has('subscription_title'))
                                    <div class="danger">{{ $errors->first('subscription_title') }}</div>
                                    @endif

                                        </div>
                                    </div>

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>No of Gems </label>
                                            <input type="number" class="form-control" name="subscription_gems"
                                                value="{{ old('subscription_gems') }}" placeholder="enter no of gems">
                                                @if ($errors->has('subscription_gems'))
                                    <div class="danger">{{ $errors->first('subscription_gems') }}</div>
                                    @endif

                                        </div>
                                    </div>

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="number" class="form-control" name="subscription_price"
                                                value="{{ old('subscription_price') }}" placeholder="enter price">
                                                @if ($errors->has('subscription_price'))
                                    <div class="danger">{{ $errors->first('subscription_price') }}</div>
                                    @endif

                                        </div>
                                    </div>

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Platform</label>
                                            <div><input type="radio" name="platform" id="optionsRadios1"
                                                    value="android" checked>Android</div>

                                            <input type="radio" name="platform" id="optionsRadios2" value="ios"
                                                checked>Ios


                                        </div>
                                    </div>

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Validity</label>
                                            <select class="form-control select2" name="subscription_validity" style="width: 100%;"
                                                placeholder="select country please">
                                                <option value="" @if(old( 'subscription_validity' ) == "" ) selected @endif>--select validity--</option>
                                                <option value="1 month" @if(old( 'subscription_validity' ) == "1 month" ) selected @endif>1 month</option>
                                                <option value="3 months" @if(old( 'subscription_validity' ) == "3 months" ) selected @endif>3 months</option>
                                                <option value="6 months" @if(old( 'subscription_validity' ) == "6 months" ) selected @endif>6 months</option>
                                                <option value="1 year" @if(old( 'subscription_validity' ) == "1 year" ) selected @endif>1 year</option>
                                            </select>

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
</section>
<!-- /.content -->


@endsection