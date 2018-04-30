@extends('admin.layouts.master')

@section('content')
    @include('admin.partials.header')
    @include('admin.partials.sidebar')
    <style>
        .navbar-cat{
            width: 75%;
            height: auto;
            float: left;
        }
        #form-cat{
            display: none;
        }
        .item-cat{
            margin: 10px 0;
            height: auto;

        }
    </style>
    <div class="content-wrapper">
        <section class="content">

                    
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Menu item +</h3>
                            <button class="btn btn-primary btn-sm pull-right" id="Addmenu">Add Menu</button>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <div class="form-group">

                                <div id="main-cat">
                                    <div id="empty"></div>
                                    @foreach($cat as $key => $c)
                                        <div class="item-cat col-md-2">
                                            <div data-id="{{$c->id}}" class="navbar-cat">

                                                <span class="badge bg-grey">{{$c->name}}</span>
                                            </div>
                                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-info"><i class="fa fa-plus"></i></button>
                                        </div>
                                    @endforeach



                                </div>
                                <form method="post" action="{{url('category/post')}}" class="form-group"  id="form-cat">
                                    {!! csrf_field() !!}
                                    <input type="text" class="form-control" id="exampleInpdata-toggle="modal"utEmail1" name="name" placeholder="Categories add">
                                    <input type="button" class="btn btn-primary btn-sm pull-right" id="category-submit" onclick="AddMenuItem()" value="Хадгалах">
                                </form>


                            </div>

                        </div>
                    </div>
                </div>
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
                            <form method="post" action="{{url('sub/cat/post')}}" id="sub-category-form">
                                {!! csrf_field() !!}
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Select</label>
                                        {!! Form::select('cat_id', $selecttype, null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">subcategories add +</label>
                                        <input type="text" class="form-control" id="subcat" name="name" placeholder=" sub Categories add">
                                    </div>

                                    <div class="form-group">
                                        <input type="button" class="btn btn-primary btn-sm pull-right" id="subcat-submit" value="Хадгалах">
                                    </div>

                                </div>

                            </form>


                        </div>

                    </div>




                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Menu item +</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success')}}
                                </div>
                            @endif
                            <div class="form-group">
                                <div id="main">
                                    <input type="button" id="btAdd" value="Дэд цэс үүсгэх +" class="bt btn btn-primary" />
                                    <input type="button" id="btRemove" value="Устгах -" class="bt btn btn-danger"/>
                                    <input type="button" id="btRemoveAll" value="Бүгдийг устгах -" class="bt btn btn-danger" /><br />
                                </div>
                                <form method="post" action="{{url('category/post')}}" class="form-group"  id="formid">
                                    {!! csrf_field() !!}
                                </form>
                            </div>



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
                            {!! $cat->links() !!}
                        </div>
                        <div class="box-header with-border">
                            <h3 class="box-title">Дэд цэс</h3>
                        </div>
                        <div class="box-body">

                            <table class="table table-bordered" id="category-list">
                                <tbody>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Нэр</th>
                                    <th>Үндсэн цэс</th>
                                    <th style="width: 40px">Label</th>
                                </tr>
                                @foreach($subcat as $key => $c)
                                    <tr>
                                        <td>{{$key}}</td>
                                        <td>{{$c->name}}</td>
                                        <td><span class="badge bg-green">{{$c->category->name}}</span></td>
                                        <td><span class="badge bg-red">55%</span></td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            {!! $subcat->links() !!}
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