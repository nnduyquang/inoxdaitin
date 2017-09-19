<div class="slider">
    {{--{{ Html::image('images/slider/slider_01.jpg','',array('class'=>'')) }}--}}
    <div class="slider-wrapper theme-default">
        <div id="slider1" class="nivoSlider">
            {{--@foreach ($sliders as $key => $data)--}}
                {{--{{ Html::image($data->slider_image,'',array('class'=>'slideshow')) }}--}}
            {{--@endforeach--}}
            {{ Html::image('images/sliders/1.jpg','',array('class'=>'slideshow')) }}
            {{ Html::image('images/sliders/2.jpg','',array('class'=>'slideshow')) }}
            {{ Html::image('images/sliders/3.jpg','',array('class'=>'slideshow')) }}
            {{ Html::image('images/sliders/4.jpg','',array('class'=>'slideshow')) }}
            {{ Html::image('images/sliders/5.jpg','',array('class'=>'slideshow')) }}
            {{ Html::image('images/sliders/6.jpg','',array('class'=>'slideshow')) }}
            {{ Html::image('images/sliders/7.jpg','',array('class'=>'slideshow')) }}
        </div>
        {{--<div class="slider-on-mobile hidden-md hidden-lg">--}}
            {{--{{ Html::image('images/sliders/SMART-CITY-800x1500.jpg','',array('class'=>'slider-mobile hidden-md hidden-lg')) }}--}}
            {{--<div class="slider-mobile-text">--}}
                {{--<p class="slider-header">Sài Gòn Intela</p>--}}
                {{--<p class="slider-description">Chỉ Thanh Toán 300 triệu nhận ngay căn hộ thông minh văn mình</p>--}}
                {{--<a href="{{URL::to('lien-he')}}"><button id="" class="btn btn-lienhe">LIÊN HỆ</button></a>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
</div>