@extends('admin.layouts.master')

@section('content')
    @include('admin.partials.header')
    @include('admin.partials.sidebar')
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Bordered Table</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success')}}
                            </div>
                            @endif
                            <form method="post" action="{{url('category/post')}}" id="category-form">
                                {!! csrf_field() !!}
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">categories add +</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Categories add">
                                    </div>

                                    <div class="form-group">
                                        <input type="button" class="btn btn-primary btn-sm pull-right" id="category-submit" value="Хадгалах">
                                    </div>
                                </div>
                            </form>


                        </div>

                    </div>
                    <!-- /.box -->

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Bordered Table</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success')}}
                                </div>
                            @endif
                            <form method="post" action="{{url('sub/cat/post')}}" id="category-form">
                                {!! csrf_field() !!}

                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Select</label>
                                        {!! Form::select('cat_id', $selecttype, null, ['class' => 'form-control']) !!}

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">subcategories add +</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Categories add">
                                    </div>

                                    <div class="form-group">
                                        <input type="button" class="btn btn-primary btn-sm pull-right" id="subcat-submit" value="Хадгалах">
                                    </div>

                                </div>

                            </form>


                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Үндсэн цэс</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <table class="table table-bordered" id="category-list">
                                <tbody>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Нэр</th>
                                    <th>Progress</th>
                                    <th style="width: 40px">Label</th>
                                </tr>
                                @foreach($cat as $key => $c)
                                    <tr>
                                        <td>{{$key}}</td>
                                        <td>{{$c->name}}</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-red">55%</span></td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- /.row -->

        </section>
    </div>
    @include('admin.partials.footer')
@endsection