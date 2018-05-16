@extends('admin.layouts.master')

@section('content')
    @include('admin.partials.header')
    @include('admin.partials.sidebar')
<div class="content-wrapper" style="min-height: 1036px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            News create

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
                <form action="{{route('news.store')}}" method="post" enctype="multipart/form-data">
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
                                <div class="timeline-body">
                                    <select class="form-control" name="cat_id">
                                        <option>--category choose--</option>
                                        @foreach($cat as $c)
                                            <option value="{{$c->id}}">{{$c->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <h3 class="timeline-header"><a href="#">Title</a></h3>

                                <div class="timeline-body">
                                    <input type="text" class="form-control" name="title" placeholder="new title enter">
                                </div>

                                <h3 class="timeline-header"><a href="#">Second Title</a></h3>

                                <div class="timeline-body">
                                    <input type="text" class="form-control" name="second_title" placeholder="new title enter">
                                </div>

                                <h3 class="timeline-header"><a href="#">Description</a></h3>

                                <div class="timeline-body">
                                   <textarea id="ckeditor" name="desc" class="form-control" placeholder="description enter">
                                   </textarea>
                                </div>

                                <div class="timeline-body">
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
                                </div>

                                <div class="timeline-footer">
                                    <input type="submit" class="btn btn-primary btn-xs" value="save">
                                    <a class="btn btn-danger btn-xs">Refresh</a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </form>
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