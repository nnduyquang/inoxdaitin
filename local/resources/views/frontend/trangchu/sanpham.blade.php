@foreach($listProduct as $key=>$data)
    <div class="col-md-12 tc-sanpham">
        <div class="row">
            <h3 class="header-title">
                <a class="left" href="{{URL::to('san-pham/'.$data[0]['category']->path)}}">{{$data[0]['category']->name}}</a>
                <a class="right" href="{{URL::to('san-pham/'.$data[0]['category']->path)}}">Xem Tất Cả</a>
            </h3>

            <div class="col-md-12 tc-list-sp">
                <div class="row">
                    <div class="wrap-item">
                        @foreach($data[0]['products'] as $key=>$product)
                            <div class="col-md-2 tc-one-sp">
                                <a href="{{URL::to('san-pham/'.$data[0]['category']->path.'/'.$product->path)}}">
                                    {{ Html::image($product->image,'',array('class'=>'tc-one-sp-img')) }}
                                    <div class="tc-one-sp-info">
                                        <h3>{{$product->name}}</h3>
                                        <span>Gọi: 0975 242424</span>
                                    </div>
                                    <div class="tc-one-sp-btn">
                                        Xem Chi Tiết
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    {{----------------------------------------------------}}
                </div>
            </div>
        </div>
    </div>
@endforeach
{{--------------------------------------------------------------------------}}