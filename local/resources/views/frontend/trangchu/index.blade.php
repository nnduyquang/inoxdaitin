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
    <div id="tc-top" class="col-md-12">
        <div class="row">
            <div class="col-md-3">
                @include('frontend.menu.danhmuc')
            </div>
            <div class="col-md-9">
                @include('frontend.slider.index')
            </div>
        </div>
    </div>
    <div id="tc-content" class="col-md-12">
        <div class="container">
            <div class="row">
                @include('frontend.trangchu.sanpham')
                @include('frontend.trangchu.tintuc')
                @include('frontend.trangchu.lienhe')
            </div>
        </div>
    </div>
@stop