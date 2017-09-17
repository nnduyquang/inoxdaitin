<div id="sb-facebook" class="col-md-12">
    <div class="row">
        <h3 class="header-title">
            <span><a href="#">Fanpage</a></span>
        </h3>
    </div>
</div>
<div id="sb-tintuc" class="col-md-12">
    <div class="row">
        <h3 class="header-title">
            <span><a href="#">Tin Tức</a></span>
        </h3>
        @foreach($news as $key=>$data)
            <div class="col-md-12 one-sb-tintuc">
                <a href="{{URL::to('tin-tuc/'.$data->path)}}">
                    <div class="col-md-5">
                        <div class="row">
                            {{ Html::image($data->image,'',array('class'=>'sb-tintuc-img')) }}
                        </div>
                    </div>
                    <div class="col-md-7">
                        <span>{{$data->title}}</span>
                    </div>
                </a>
            </div>
        @endforeach
        {{----------------------------------------}}
    </div>
</div>