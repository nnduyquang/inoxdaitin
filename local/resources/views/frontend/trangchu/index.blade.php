@extends('frontend.master')
@section('styles')
    {{ Html::style('css/themes/default/default.css') }}
    {{ Html::style('css/trangchu.css') }}
@stop
@section('scripts')
    <style>

        .img-banner-hover{
            position: relative;
            cursor: pointer;
        }
        .img-banner-sm {
            width: 100%;
            /*height: 105%;*/
        }

        .img-banner-hover:hover:after{
            width: 50%;
        }

        .img-banner-hover:hover:before{
            width: 50%;
        }

        .img-banner-hover:after{
            position: absolute;
            content: '';
            width: 0%;
            right: 50%;
            top: 0%;
            /*transform: translateY(-50%);*/
            height: 96%;
            background-color:rgba(00,00,00,0.3);
            z-index: 5;
            transition: .3s;
        }

        .img-banner-hover:before{
            position: absolute;
            content: '';
            width: 0%;
            left: 50%;
            top: 0%;
            /*transform: translateY(-50%);*/
            height: 96%;
            background-color:rgba(00,00,00,0.3);
            z-index: 5;
            transition: .3s;
        }

    </style>
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
                <p class="trangchu-tag">Top Search : <a href="">Inox Đại Tín,</a>
                    <a href="">Inox màu,</a>
                    <a href="">Inox hoa văn màu,</a>
                    <a href="">Inox tấm,</a>
                    <a href="">Cung cấp Inox nguyên liệu,</a>
                    <a href="">Inox thanh,</a>
                    <a href="">Inox cuộn,</a>
                    <a href="">Inox ống</a>
                </p>
                @include('frontend.slider.index')
                <div class="row" style="margin-top: 10px">
                    <div class="col-md-6">
                        <div class=" img-banner-hover">
                        <img src="{{URL::asset('images/bg/bannerimg2.jpg')}}" alt="" class="img-banner-sm">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=" img-banner-hover">
                        <img src="{{URL::asset('images/bg/bannerimg3.jpg')}}" alt="" class="img-banner-sm">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="tc-content" class="col-md-12">
        <div class="row">
            <div class="container">
                <div class="row">
                    @include('frontend.trangchu.sanpham')
                    @include('frontend.trangchu.tintuc')
                    @include('frontend.trangchu.lienhe')
                </div>
            </div>
        </div>
    </div>
@stop
