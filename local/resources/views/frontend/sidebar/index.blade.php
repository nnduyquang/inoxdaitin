<div id="sb-facebook" class="col-md-12 hidden-sm hidden-xs">
    <div class="row">
        <h3 class="header-title">
            <span><a href="#">Fanpage</a></span>
        </h3>
        <div class="fb-page" data-href="https://www.facebook.com/C%C3%B4ng-Ty-Tnhh-Th%C3%A9p-Kh%C3%B4ng-G%E1%BB%89-%C4%90%E1%BA%A1i-T%C3%ADn-494306457354567/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/C%C3%B4ng-Ty-Tnhh-Th%C3%A9p-Kh%C3%B4ng-G%E1%BB%89-%C4%90%E1%BA%A1i-T%C3%ADn-494306457354567/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/C%C3%B4ng-Ty-Tnhh-Th%C3%A9p-Kh%C3%B4ng-G%E1%BB%89-%C4%90%E1%BA%A1i-T%C3%ADn-494306457354567/">Công Ty Tnhh Thép Không Gỉ Đại Tín</a></blockquote></div>
    </div>
</div>
<div id="sb-tintuc" class="col-md-12 hidden-sm hidden-xs">
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