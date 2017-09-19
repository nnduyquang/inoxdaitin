<div class="col-md-12 tc-timkiem">
    <div class="row">
        <h3 class="header-title">
            <span>KẾT QUẢ TÌM KIẾM</span>
        </h3>

        <div class="col-md-12 tc-list-sp">
            <div class="row">
                @foreach($products as $key=>$data)
                    <div class="col-md-3 tc-one-sp">
                        <a href="{{URL::to('san-pham/'.$data->category->path.'/'.$data->path)}}">
                            {{ Html::image($data->image,'',array('class'=>'tc-one-sp-img')) }}
                            <div class="tc-one-sp-info">
                                <h3>{{$data->name}}</h3>
                                <span>Gọi: 0975 242424</span>
                            </div>
                            <div class="tc-one-sp-btn">
                                Xem Chi Tiết
                            </div>
                        </a>
                    </div>
                @endforeach
                {{----------------------------------------------------}}
            </div>
        </div>
    </div>
</div>