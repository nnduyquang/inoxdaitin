<div id="top-info" class="col-md-12 hidden-sm hidden-xs">
    <div class="row">
        <div class="container">
            <span class="top-info-right">Liên Hệ: 0975.24.24.24 - Anh Dũng</span>
            <span class="top-info-left">Địa Chỉ: 139D, QUỐC LỘ 22, KHU PHỐ 4, P.TRUNG MỸ TÂY, QUẬN 12, TP.HỒ CHÍ MINH</span>
        </div>
    </div>
</div>
<div id="logo-top" class="col-md-12 hidden-sm hidden-xs">
    <div class="row">
        <div class="container">
            {{ Html::image('images/logo/341.png','',array('class'=>'logo-img')) }}
        </div>
    </div>
</div>
<div id="menu-ngang" class="col-md-12 hidden-sm hidden-xs">
    <div class="container">
        <ul class="menu-detail">
            <li><a href="{{URL::to('/')}}">Trang Chủ</a></li>
            <li><a href="{{URL::to('gioi-thieu')}}">Giới Thiệu</a></li>
            <li><a href="{{URL::to('san-pham')}}">Sản Phẩm</a></li>
            <li><a href="{{URL::to('tin-tuc')}}">Tin Tức</a></li>
            <li><a href="{{URL::to('lien-he')}}">Liên Hệ</a></li>
        </ul>
        <ul class="menu-search">
            <li><a href="#" id="clickSearch"><i class="fa fa-search" aria-hidden="true"></i></a></li>
            <li>
                {!! Form::open(array('route' => 'search','method'=>'POST','id'=>'formSearch')) !!}
                {!! Form::text('key-search', '', array('placeholder' => 'Tìm Kiếm','class' => 'form-control','id'=>'searchInput')) !!}
                {!! Form::close() !!}
            </li>
        </ul>
    </div>
</div>
<div id="menu-ngang-scroll" class="col-md-12 navbar-fixed-top hidden-sm hidden-xs" style="display: none">
    <div class="container">
        <ul class="menu-detail">
            <li><a href="{{URL::to('/')}}">DANH SÁCH SẢN PHẨM</a>
                <ul class="sub-menu">
                    @foreach($categories as $key=>$data)
                        <li><a href="{{URL::to('san-pham/'.$data->path)}}">{{$data->name}}</a></li>
                    @endforeach
                </ul>
            </li>
        </ul>
        <ul class="menu-search">
            <li><a href="#" id="clickSearch"><i class="fa fa-search" aria-hidden="true"></i></a></li>
            <li>
                {!! Form::open(array('route' => 'search','method'=>'POST','id'=>'formSearch')) !!}
                {!! Form::text('key-search', '', array('placeholder' => 'Tìm Kiếm','class' => 'form-control','id'=>'searchInput')) !!}
                {!! Form::close() !!}
            </li>
        </ul>
        <ul class="menu-detail pull-right">
            <li><a href="{{URL::to('lien-he')}}">Liên Hệ: 0975.24.24.24 - Anh Dũng</a></li>
        </ul>
    </div>
</div>