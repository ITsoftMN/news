@extends('admin.layouts.master')

@section('content')
    @include('admin.partials.header')
    @include('admin.partials.sidebar')

    <div class="content-wrapper">
        <section class="content">
            <div class="col-md-12">
                <div class="box box-info">
                    @if(session('news_edit'))
                        <div class="alert alert-success">
                            {{session('news_edit')}}
                        </div>
                    @endif
                    <div class="box-header with-border">
                        <h3 class="box-title">News List</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Time</th>
                                        <th>Types</th>
                                        <th>Settings</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($news as $n)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td><span class="label label-success">{!! $n->category->name !!}</span></td>
                                        <td>{!! $n->title !!}</td>
                                        <td><img style="width:100px;" src="uploads/news/small/{{$n->image}}"></td>
                                        <td>{{$n->created_at->diffForHumans()}}</td>
                                        <td>
                                            @if($n->slider == 0)
                                                <button id="news-slider-add{{$n->id}}" onclick="newsSlider({{$n->id}})" class="btn btn-primary btn-xs">slider +</button>


                                            @else
                                                <button id="news-slider-add{{$n->id}}" onclick="newsSlider({{$n->id}})" class="btn btn-danger btn-xs">slider -</button>

                                            @endif
                                                @if($n->featured == 0)


                                                    <button id="news-featured-add{{$n->id}}" onclick="newsFeatured({{$n->id}})" class="btn btn-primary btn-xs">featured +</button>
                                                @else

                                                    <button id="news-featured-add{{$n->id}}" onclick="newsFeatured({{$n->id}})" class="btn btn-danger btn-xs">featured -</button>
                                                @endif
                                        </td>
                                        <td>
                                            <a href="{{route('news.edit',$n->id)}}" class="btn btn-warning btn-xs" title="edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a href="#" class="btn btn-danger btn-xs" title="delete">
                                                <i class="fa fa-trash-o"></i>
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="{{route('news.create')}}" class="btn btn-sm btn-info btn-flat pull-left">New News add</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All News</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div>
        </section>
    </div>

    @include('admin.partials.footer')
@endsection