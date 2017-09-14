@extends('frontend.master')
@section('styles')
    {{ Html::style('css/trangchu.css') }}
    {{ Html::style('css/fe.sidebar.css') }}
    {{ Html::style('css/fe.sanpham.chitiet.css') }}
@stop
@section('scripts')
@stop
{{--@section('slider')--}}
{{--@include('frontend.slider.index')--}}
{{--@stop--}}
@section('container')
    <div class="col-md-4">
        @include('frontend.menu.danhmuc')
        @include('frontend.sidebar.index')
    </div>
    <div class="col-md-8">
        @include('frontend.chitiet.chitiet')
    </div>
    @include('frontend.trangchu.lienhe')
@stop