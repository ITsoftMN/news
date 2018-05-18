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
                        <h3 class="box-title">Banner List</h3>

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
                                    <th>Links</th>
                                    <th>video links</th>
                                    <th>Image</th>
                                    <th>Time</th>
                                    <th>Settings</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($banner as $n)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td><span class="label label-success">{!! $n->links !!}</span></td>
                                        <td>{!! $n->title !!}</td>
                                        <td><img style="width:100px;" src="uploads/banner/{{$n->image}}"></td>
                                        <td>{{$n->created_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="{{route('banner.edit',$n->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="{{route('banner.create')}}" class="btn btn-sm btn-info btn-flat pull-left">New Banner add</a>

                    </div>
                    <!-- /.box-footer -->
                </div>
            </div>
        </section>
    </div>

    @include('admin.partials.footer')
@endsection