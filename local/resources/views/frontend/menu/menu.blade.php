<div id="top-info" class="col-md-12">
    <div class="row">
        <div class="container">
            <span class="top-info-right">Liên Hệ: 0975.24.24.24 - Anh Dũng</span>
            <span class="top-info-left">Địa Chỉ: 139D, QUỐC LỘ 22, KHU PHỐ 4, P.TRUNG MỸ TÂY, QUẬN 12, TP.HỒ CHÍ MINH</span>
        </div>
    </div>
</div>
<div id="logo-top" class="col-md-12">
    <div class="row">
        <div class="container">
            {{ Html::image('images/logo/341.png','',array('class'=>'logo-img')) }}
        </div>
    </div>
</div>
<div id="menu-ngang" class="col-md-12">
    <div class="container">
        <ul class="menu-detail">
            <li><a href="{{URL::to('/')}}">Trang Chủ</a></li>
            <li><a href="">Giới Thiệu</a></li>
            <li><a href="{{URL::to('san-pham')}}">Sản Phẩm</a></li>
            <li><a href="{{URL::to('tin-tuc')}}">Tin Tức</a></li>
            <li><a href="{{URL::to('lien-he')}}">Liên Hệ</a></li>
        </ul>
        <ul class="menu-search">
            <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
            <li> {!! Form::text('search', '', array('placeholder' => 'Tìm Kiếm','class' => 'form-control')) !!}</li>
        </ul>
    </div>
</div>