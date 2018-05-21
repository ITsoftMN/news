@extends('admin.layouts.master')

@section('content')
    @include('admin.partials.header')
    @include('admin.partials.sidebar')

    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Settings</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{route('settings.store')}}" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Upload Logo</label>
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

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Copyright</label>
                                    <input type="text" name="copyright" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Facebook</label>
                                    <input type="text" name="facebook" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Twitter</label>
                                    <input type="text" name="twitter" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Youtube</label>
                                    <input type="text" name="youtube" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>

                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>


                </div>
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Quick Example</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        {!! Form::model($setall, ['method'=> 'patch','action' => ['SettingController@update',$setall->id],'files' => 'true']) !!}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Logo</label>
                                    <div class="input-group">
                                        <img src="/uploads/settings/logo/{{$setall->logo}}"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" class="form-control" id="title1" name="title" value="{{$setall->title}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Copyright</label>
                                    <input type="text" class="form-control" id="title2" name="copyright" value="{{$setall->copyright}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Facebook</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="title3" name="facebook" value="{{$setall->fb_link}}" disabled>
                                        <span class="input-group-addon"><a href="{{$setall->fb_link}}" target="_blank"><i class="fa  fa-map-pin"></i></a></span>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Twitter</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="twitter" id="title4" value="{{$setall->tw_link}}" disabled>
                                        <span class="input-group-addon"><a href="{{$setall->tw_link}}" target="_blank"><i class="fa  fa-map-pin"></i></a></span>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Youtube</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="youtube" id="title5" value="{{$setall->you_link}}" disabled>
                                        <span class="input-group-addon"><a href="{{$setall->you_link}}" target="_blank"><i class="fa  fa-map-pin"></i></a></span>
                                    </div>

                                </div>

                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer" id="setting-btn-edit">
                                <input type="button" id="settings-edit" class="btn btn-primary" value="Edit">
                            </div>

                        {!! Form::close() !!}
                    </div>


                </div>
            </div>

        </section>
    </div>

    @include('admin.partials.footer')
@endsection