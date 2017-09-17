<div id='tc-tintuc' class="col-md-12">
    <div class="row">
        <h3 class="header-title">
            <span>Tin Tức Mới</span>
            {{--<a href="">Xem Tất Cả</a>--}}
        </h3>

        <div class="col-md-12 tc-list-tt">
            <div class="row">
                @foreach($news as $key=>$data)
                <div class="col-md-3 tc-one-tt">
                    <a href="{{URL::to('tin-tuc/'.$data->path)}}">
                        {{ Html::image($data->image,'',array('class'=>'tc-one-tt-img')) }}
                        <div class="tc-one-sp-info">
                            <h3>{{$data->title}}</h3>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>