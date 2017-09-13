@extends('frontend.master')
@section('styles')
    {{ Html::style('css/themes/default/default.css') }}
    {{ Html::style('css/trangchu.css') }}
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
        content
    </div>
@stop