@extends('master')

@section('title', 'Gems | Add')

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
                            <h3 class="box-title">New Gem Package</h3>


                        </div>
                        <!-- /.box-header -->
                        <div class="container-fluid">

                            <form method="POST" action="{{route('gem.store')}}" enctype="multipart/form-data">
                                <div class="box-body">
                                    @csrf
                                    @if (session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Gems Package name </label>
                                            <input type="text" class="form-control" name="gem_title"
                                                value="{{ old('gem_title') }}" placeholder="enter gems package name ">
                                            @if ($errors->has('gem_title'))
                                            <div class="danger">{{ $errors->first('gem_title') }}</div>
                                            @endif


                                        </div>
                                    </div>

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Gems Count </label>
                                            <input type="number" class="form-control" name="gem_count"
                                                value="{{ old('gem_count') }}" placeholder="enter no of gems">

                                            @if ($errors->has('gem_count'))
                                            <div class="danger">{{ $errors->first('gem_count') }}</div>
                                            @endif

                                        </div>
                                    </div>

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Gem Package Price</label>
                                            <input type="number" class="form-control" name="gem_price"
                                                value="{{ old('gem_price') }}" placeholder="enter price">

                                            @if ($errors->has('gem_price'))
                                            <div class="danger">{{ $errors->first('gem_price') }}</div>
                                            @endif

                                        </div>
                                    </div>

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Platform</label>
                                            <div><input type="radio" name="platform" id="platform" value="android"
                                                    checked>Android</div>

                                            <input type="radio" name="platform" id="platform" value="ios" checked>Ios


                                        </div>
                                    </div>


                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Gem Package icon </label>
                                            <input type="file" class="form-control" name="gem_icon">
                                            @if ($errors->has('gem_icon'))
                                            <div class="danger">{{ $errors->first('gem_icon') }}</div>
                                            @endif
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