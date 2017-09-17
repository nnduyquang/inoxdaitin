<div id="menu-danhmuc" class="col-md-12">
    <div class="row">
        <h3><span>Danh Mục Sản Phẩm</span></h3>
        <ul>
            @foreach($categories as $key=>$data)
            <li><a href="{{URL::to('san-pham/'.$data->path)}}">{{$data->name}}</a></li>
            @endforeach
        </ul>
    </div>
</div>