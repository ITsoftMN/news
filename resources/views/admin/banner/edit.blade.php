@extends('admin.layouts.master')

@section('content')
    @include('admin.partials.header')
    @include('admin.partials.sidebar')
    <div class="content-wrapper" style="min-height: 1036px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Banner edit
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">UI</a></li>
                <li class="active">Timeline</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <!-- The time line -->
                    <div class="box">
                        <div class="box-body">
                            {!! Form::model($banners, ['method'=> 'patch','action' => ['BannerController@update',$banners->id],'files' => 'true']) !!}
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="">
                                        Banner Position
                                    </label>
                                    <input type="text" class="form-control" name="position" value="{{$banners->position}}">
                                </div>

                                <div class="form-group">
                                    <label for="">
                                        Banner Links
                                    </label>
                                    <input type="text" class="form-control" name="banner_links" value="{{$banners->links}}">
                                </div>
                                <div class="form-group">
                                    <label for="">
                                        Banner Video  Links
                                    </label>
                                    <input type="text" class="form-control" name="banner_video" value="{{$banners->video_link}}">
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label for="">
                                            current image
                                        </label>
                                        <img style="width: 100%" src="/uploads/banner/{{$banners->image}}">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Image change</label>
                                            <div class="input-group">
                                        <span class="input-group-btn">
                                            <span class="btn btn-default btn-file">
                                                Browse… <input type="file" name="file" id="imgInp">
                                            </span>
                                        </span>
                                                <input type="text" class="form-control" readonly>
                                            </div>
                                            <img id='img-upload'/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-sm" value="Save banner">
                                </div>
                           {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->


            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
    @include('admin.partials.footer')
@endsection