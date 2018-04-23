@extends('admin.layouts.master')

@section('content')
    @include('admin.partials.header')
    @include('admin.partials.sidebar')
    @include('admin.pages.dashboard')
    @include('admin.partials.footer')
@endsection
