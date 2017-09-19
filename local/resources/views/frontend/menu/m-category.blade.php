@extends('frontend.master')
@section('styles')

@stop
@section('title')
    Danh Mục Sản Phẩm
@stop
@section('scripts')
@stop
@section('slider')
@stop
@section("container")
    <div class="col-md-12">
        <div class="empty-space-32"></div>
        <div class="empty-space-32"></div>
    </div>
    <div class="m-category-layout">
        @foreach($categories as $key=>$data)
        <div class="m-item-category">
            <div class="m-item-category-0">
                <a href="{{URL::to('san-pham/'.$data->path)}}"> {{ Html::image($data->image,'',array('class'=>'img-category img-rounded')) }}
                    <span>{{$data->name}}</span>
                </a>
            </div>
        </div>
        @endforeach
    </div>
@stop

