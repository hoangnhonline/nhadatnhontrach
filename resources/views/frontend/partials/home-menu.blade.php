<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse menu" id="bs-example-navbar-collapse-1">
    <div class="row">
    <div class="col-md-2" style="padding-top:2px;">
        <a title="Logo" href="{{ route('home') }}"><img style="height: 40px;" src="{{ Helper::showImage($settingArr['logo']) }}" alt=""></a>
    </div>
    <ul class="nav navbar-nav navbar-left col-md-10">
        <li class="level0 {{ $routeName == "home" ? "active" : "" }}"><a class="" href="{{ route('home') }}">Trang chủ</a></li><!-- END MENU HOME -->    
      
        <li class="level0 {{ $routeName == "about" ? "active" : "" }}"><a class="" href="{{ route('about') }}">Về Nhơn Trạch</a></li><!-- END MENU HOME -->
        
        @foreach($articleCate as $value)
        @if($value->show_menu == 1)
        <li class="level0 {{ (isset($cateDetail) && $cateDetail->id == $value->id) ? "active" : "" }}"><a href="{{ route('news-list', $value->slug) }}">{!! $value->name !!}</a></li>
        @endif
        @endforeach
        <li class="level0 {{ in_array($routeName, ['du-an', 'detail-project', 'tab']) ? "active" : "" }}"><a href="{{ route('du-an') }}">Dự án</a></li>
        <li class="level0 parent {{ (in_array($routeName, ['ban', 'danh-muc', 'chi-tiet']) && isset($type) && $type == 1) ? "active" : "" }}">
            <a href="{{ route('ban') }}">Cần bán</a>
            <ul class="level0 submenu">
                @foreach($banList as $ban)
                <li class="level1"><a href="{{ route('danh-muc', $ban->slug ) }}">{!! $ban->name !!}</a>
                @if($ban->cate->count() > 0)
                <ul class="level0 submenu">
                   @foreach($ban->cate as $cate)
                   @if($cate->status == 1)
                    <li class="level1"><a href="{{ route('danh-muc-con', [$ban->slug, $cate->slug] ) }}">{!! $cate->name !!}</a></li>                    
                    @endif       
                   @endforeach
                </ul>
                @endif
                </li>                         
                @endforeach
            </ul>
        </li><!-- END MENU SHOP -->
        <li class="level0 {{ (in_array($routeName, ['cho-thue', 'danh-muc', 'chi-tiet']) && isset($type) && $type == 2) ? "active" : "" }}"><a href="{{ route('cho-thue') }}">Cần cho thuê</a>
            <ul class="level0 submenu">
                @foreach($thueList as $thue)
                <li class="level1"><a href="{{ route('danh-muc', $thue->slug ) }}">{!! $thue->name !!}</a></li>@if($ban->cate->count() > 0)
                <ul class="level0 submenu">
                   @foreach($thue->cate as $cate)
                   @if($cate->status == 1)
                    <li class="level1"><a href="{{ route('danh-muc-con', [$thue->slug, $cate->slug] ) }}">{!! $cate->name !!}</a></li>                    
                    @endif       
                   @endforeach
                </ul>
                @endif                          
                @endforeach
            </ul>
        </li><!-- END MENU BLOG -->
        
        <li class="level0 {{ $routeName == "contact" ? "active" : "" }}"><a class="" href="{{ route('contact') }}">Liên hệ</a></li><!-- END MENU HOME -->
    </ul>
    </div>
</div><!-- /.navbar-collapse -->