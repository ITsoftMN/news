@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Upload Product</div>
                    <div class="card-body">
                        <form action="{{url('product/add')}}" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="form-group">
                                <div class="col-form-label">
                                    Title
                                </div>
                                <input type="text" name="name" placeholder="Product Name">
                            </div>

                            <div class="form-group">
                                <div class="col-form-label">
                                    Price
                                </div>
                                <input type="text" name="price" placeholder="Product Price">
                            </div>

                            <div class="form-group">
                                <div class="col-form-label">
                                    Image
                                </div>
                                <input type="file" name="file" placeholder="Product Name">
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn-danger" value="save">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
