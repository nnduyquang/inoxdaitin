<div id="tin-tuc" class="col-md-12">
    <div class="row">
        @foreach($news as $key=>$data)
            <div class="col-md-12 one-tt">
                <div class="row">
                    <div class="col-md-3">
                        <div class="row">
                            {{ Html::image($data->image,'',array('class'=>'tt-img')) }}
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="tt-content col-md-12">
                                <h3>{{$data->title}}</h3>
                                {!! $data->content !!}
                            </div>
                            <div class="tt-content col-md-12">
                                <a href="{{URL::to('tin-tuc/'.$data->path)}}">Chi Tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>