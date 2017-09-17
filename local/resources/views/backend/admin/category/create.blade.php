@extends('backend.admin.master')
@section('styles')
    {{ Html::style('css/be.category.css') }}
    {{ Html::style('css/bootstrap-toggle.min.css') }}
@stop
@section('scripts')
    {{ Html::script('js/bootstrap-toggle.min.js',array('async' => 'async') ) }}
    {{ Html::script('js/ulti.js',array('async' => 'async') ) }}
    {{ Html::script('js/be.category.js',array('async' => 'async') ) }}
@stop
@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tạo Mới Sản Phẩm</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('category.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Úi!</strong> Hình Như Có Gì Đó Sai Sai.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(array('route' => 'category.store','method'=>'POST')) !!}
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <strong>Tên Sản Phẩm:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Hình Đại Diện: </strong>
                {!! Form::text('image', null, array('class' => 'form-control','id'=>'path')) !!}
                {!! Form::button('Browses', array('id' => 'btnBrowse','class'=>'btn btn-primary')) !!}

            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Kích Hoạt:</strong>
                <input name="category_is_active" data-on="Có" data-off="Không" type="checkbox" data-toggle="toggle">
                <div class="form-inline">
                    <strong>Thứ tự:</strong>
                    {!! Form::text('category_order', null, array('placeholder' => 'Thứ Tự','class' => 'form-control')) !!}
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                {{ Html::image('','',array('id'=>'showHinhLoaiSanPham','class'=>'showHinhLoaiSanPham'))}}
            </div>
        </div>
        <div class="col-md-2">

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button id="btnDanhMuc" type="submit" class="btn btn-primary">Tạo Mới Sản Phẩm</button>
        </div>
    </div>
    {!! Form::close() !!}
@stop