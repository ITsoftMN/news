@extends('admin.layouts.master')

@section('content')
    @include('admin.partials.header')
    @include('admin.partials.sidebar')
    <div class="content-wrapper" style="min-height: 1036px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Banner create
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
                            <form action="{{route('banner.store')}}" method="post" enctype="multipart/form-data">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="">
                                        Banner Position
                                    </label>
                                    <input type="text" class="form-control" name="position" placeholder="enter title">
                                </div>
                                <div class="form-group">
                                    <label for="">
                                        Banner Links
                                    </label>
                                    <input type="text" class="form-control" name="banner_links" placeholder="enter title">
                                </div>
                                <div class="form-group">
                                    <label for="">
                                        Banner Video  Links
                                    </label>
                                    <input type="text" class="form-control" name="banner_video" placeholder="enter youtube embed link">
                                </div>
                                <div class="form-group">
                                    <label>Upload Image</label>
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
                                <input type="submit" class="btn btn-primary btn-sm" value="Save banner">
                            </form>
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