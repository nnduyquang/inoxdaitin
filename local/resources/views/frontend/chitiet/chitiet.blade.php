<div id="chitiet-sp" class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{URL::to('san-pham/'.$pathCateGory)}}">{{$product->category->name}}</a></li>
                    <li class="breadcrumb-item active">{{$product->name}}</li>
                </ol>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        {{ Html::image($product->image,'',array('class'=>'chitiet-sp-img')) }}
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="header-title">{{$product->name}}</h3>
                    <span class="chitiet-sp-gia">Gọi: 0975 242424</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="row">
        <ul class="nav nav-tabs chitiet-sp-nav">
            <li><a href="">Mô Tả</a></li>
        </ul>
        <div class="col-md-12 chitiet-sp-detail">
            <div class="row">
                {!! $product->content !!}
            </div>
        </div>
    </div>
</div>