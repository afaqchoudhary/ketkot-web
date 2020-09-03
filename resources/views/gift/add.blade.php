@extends('master')

@section('title', 'Gifts | Add')

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
                            <h3 class="box-title">New Gift</h3>


                        </div>
                        <!-- /.box-header -->
                        <div class="container-fluid">

                            <form method="POST" action="{{route('gift.store')}}" enctype="multipart/form-data">
                                <div class="box-body">
                                    @csrf
                                    @if (session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Gift Title </label>
                                            <input type="text" class="form-control" name="gift_title"
                                                value="{{ old('gift_title') }}" placeholder="enter gift package name ">
                                            @if ($errors->has('gift_title'))
                                            <div class="danger">{{ $errors->first('gift_title') }}</div>
                                            @endif

                                        </div>
                                    </div>

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Gems Count for prime account </label>
                                            <input type="number" class="form-control" name="gift_gems_prime"
                                                value="{{ old('gift_gems_prime') }}"
                                                placeholder="enter gems count for prime">
                                            @if ($errors->has('gift_gems_prime'))
                                            <div class="danger">{{ $errors->first('gift_gems_prime') }}</div>
                                            @endif

                                        </div>
                                    </div>

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Gems Count for non-prime account</label>
                                            <input type="number" class="form-control" name="gift_gems"
                                                value="{{ old('gift_gems') }}"
                                                placeholder="enter gems count for non prime">
                                            @if ($errors->has('gift_gems'))
                                            <div class="danger">{{ $errors->first('gift_gems') }}</div>
                                            @endif

                                        </div>
                                    </div>




                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <label>Gift icon </label>
                                            <input type="file" class="form-control" name="gift_icon">
                                            @if ($errors->has('gift_icon'))
                                            <div class="danger">{{ $errors->first('gift_icon') }}</div>
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