@extends('admin.layouts.master')

@section('content')
    @include('admin.partials.header')
    @include('admin.partials.sidebar')

    <div class="content-wrapper">
        <section class="content">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">News List</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Item</th>
                                        <th>Status</th>
                                        <th>Popularity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                    <td>Call of Duty IV</td>
                                    <td><span class="label label-success">Shipped</span></td>
                                    <td>

                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
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