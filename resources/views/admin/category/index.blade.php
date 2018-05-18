@extends('admin.layouts.master')

@section('content')
    @include('admin.partials.header')
    @include('admin.partials.sidebar')
    <style>
        .navbar-cat{
            width: 90%;
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
        p{
            margin: 0px;
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

                            <div class="col-md-6">

                                <div id="main-cat">
                                    <div id="empty"></div>
                                    @foreach($cat as $key => $c)
                                        <div class="item-cat">
                                            <div data-id="{{$c->id}}" class="navbar-cat">
                                                <span class="badge bg-red"></span>
                                                <span class="badge bg-grey">{{$c->name}}</span>
                                                <span class="badge bg-green">links + "{{$c->links}}"</span>
                                            </div>
                                            <button class="btn btn-primary btn-xs" data-toggle="modal" title="sub menu add" data-target="#modal-info{{$c->id}}"><i class="fa fa-plus"></i></button>
                                        </div>

                                        <div class="modal modal-info fade" id="modal-info{{$c->id}}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title">Category: &nbsp;&nbsp;{{$c->name}},&nbsp;&nbsp;Links: &nbsp;&nbsp;{{$c->links}}</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <b>Sub categories: </b>
                                                        <div id="subcat-div-for{{$c->id}}">
                                                            @foreach($c->subCategories as $subCat)
                                                                <p>{{$subCat->name}}&nbsp;&nbsp;&nbsp;,<b>links</b> + "{{$subCat->links}}"</p>
                                                            @endforeach
                                                        </div>

                                                        {{Form::open(['action'=>'CategoryController@subCatPost'])}}

                                                            <div class="box-body">
                                                                <input type="hidden" name="cat_id" value="{{$c->id}}">
                                                                <label for="exampleInputEmail1">subcategories add +</label>

                                                                <input type="text" class="form-control" id="subcat{{$c->id}}" name="name" placeholder=" sub Categories add">
                                                                <label for="exampleInputEmail1">sub cat links</label>

                                                                <input type="text" class="form-control" name="links" placeholder=" links">
                                                            </div>

                                                        {{Form::close()}}

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                                        <button type="button" id="newssubcat" onclick="createSubCat(this)" class="btn btn-outline">Save changes</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                    @endforeach

                                </div>

                            </div>
                            <div class="col-md-6">
                                <form method="post" action="{{url('category/post')}}" class="form-group"  id="form-cat">
                                    {!! csrf_field() !!}
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Categories name add">
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="links" placeholder="Category link">
                                    </div>

                                    <div class="col-md-3">
                                        <input type="button" class="btn btn-primary btn-sm pull-right" id="category-submit" onclick="AddMenuItem()" value="Хадгалах">
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">


                </div>

                <div class="col-md-12">
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
                                    <th>Sub categories</th>
                                    <th>Links</th>
                                    <th>Settings</th>
                                </tr>
                                @foreach($cat as $key => $c)
                                    <tr>
                                        <td>{{$key}}</td>
                                        <td>{{$c->name}}</td>
                                        <td>
                                            @foreach($c->subCategories as $subCat)

                                                <span class="badge bg-green">{{$subCat->name}}</span>
                                            @endforeach

                                        </td>
                                        <td><span class="badge bg-green">{{$c->links}}</span></td>
                                        <td>
                                            <button class="btn btn-primary btn-xs" data-toggle="modal" title="sub menu add" data-target="#modal-default{{$c->id}}"><i class="fa fa-plus"></i></button>
                                        </td>
                                    </tr>

                                    <div class="modal modal-default fade" id="modal-default{{$c->id}}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">Category Edit</h4>
                                                </div>
                                                <div class="modal-body">


                                                    {{Form::open(['action'=>'CategoryController@update'])}}

                                                    <div class="box-body">
                                                        <input type="hidden" name="cat_id" value="{{$c->id}}">
                                                        <label for="exampleInputEmail1">Category</label>

                                                        <input type="text" class="form-control" id="subcat{{$c->id}}" name="name" value="{{$c->name}}">

                                                    </div>

                                                    {{Form::close()}}

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                    <input type="submit" class="btn btn-default" value="save">
                                                    <button type="button" id="newssubcat" onclick="createCatEdit(this)" class="btn btn-default">Save changes</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                @endforeach

                                </tbody>
                            </table>
                            {!! $cat->links() !!}
                        </div>

                        {{--<div class="box-body">--}}

                            {{--<table class="table table-bordered" id="category-list">--}}
                                {{--<tbody>--}}
                                {{--<tr>--}}
                                    {{--<th style="width: 10px">#</th>--}}
                                    {{--<th>Нэр</th>--}}
                                    {{--<th>Үндсэн цэс</th>--}}
                                    {{--<th style="width: 40px">Label</th>--}}
                                {{--</tr>--}}
                                {{--@foreach($subcat as $key => $c)--}}
                                    {{--<tr>--}}
                                        {{--<td>{{$key}}</td>--}}
                                        {{--<td>{{$c->name}}</td>--}}
                                        {{--<td><span class="badge bg-green">{{$c->category->name}}</span></td>--}}
                                        {{--<td><span class="badge bg-red">55%</span></td>--}}
                                    {{--</tr>--}}
                                {{--@endforeach--}}

                                {{--</tbody>--}}
                            {{--</table>--}}
                            {{--{!! $subcat->links() !!}--}}
                        {{--</div>--}}

                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- /.row -->

        </section>
    </div>
    @include('admin.partials.footer')
@endsection