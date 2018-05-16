@extends('admin.layouts.master')

@section('content')
    @include('admin.partials.header')
    @include('admin.partials.sidebar')
    <div class="content-wrapper" style="min-height: 1036px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                News Edit

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

                    {!! Form::model($news, ['method'=> 'patch','action' => ['Newscontroller@update',$news->id],'files' => 'true']) !!}
                        {!! csrf_field() !!}
                        <ul class="timeline">

                            <li class="time-label">
                                  <span class="bg-red" id="now-date">

                                  </span>
                            </li>

                            <li>
                                <i class="fa fa-envelope bg-blue"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                                    <h3 class="timeline-header"><a href="#">Current Category</a></h3>
                                    <div class="timeline-body">
                                        <input class="form-control" type="text" disabled name="cat_id" value="{{$news->category->name}}">
                                    </div>

                                    <h3 class="timeline-header"><a href="#">Title</a></h3>

                                    <div class="timeline-body">
                                        <input type="text" class="form-control" name="title" value="{{$news->title}}">
                                    </div>

                                    <h3 class="timeline-header"><a href="#">Second Title</a></h3>

                                    <div class="timeline-body">
                                        <input type="text" class="form-control" name="second_title" value="{{$news->medium_title}}">
                                    </div>

                                    <h3 class="timeline-header"><a href="#">Description</a></h3>

                                    <div class="timeline-body">
                                       <textarea id="ckeditor" name="desc" class="form-control" placeholder="description enter">
                                           {!! $news->description !!}
                                       </textarea>
                                    </div>

                                    <div class="row">
                                        <div class="timeline-body">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Current Image</label>
                                                    <img style="width: 100%;" class="margin" src="/uploads/news/small/{{$news->image}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Change Image</label>
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
                                    </div>

                                    <div class="timeline-footer">
                                        <input type="submit" class="btn btn-primary btn-xs" value="save">
                                        <a class="btn btn-danger btn-xs">Refresh</a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    {!! Form::close() !!}
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