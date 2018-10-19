<footer class="footer">
	<div class="block-menu-bottom">
        <ul class="container">
            @if($footerLinkNgang)
                @foreach($footerLinkNgang as $link)
                <li><a href="{{ $link->link_url }}"  title="{!! $link->link_text !!}">{!! $link->link_text !!}</a></li>
                @endforeach
            @endif            
        </ul>
    </div>
    <div class="container">
    	<div class="block-footer row">
    		<div class="block-logo-footer col-sm-4">
                <a href="{{ route('home') }}" title="Đô thị">
                	<img src="{{ Helper::showImage($settingArr['logo']) }}" alt="logo footer">
                </a>

            </div>
            <div class="block-footer-address col-sm-4">
                <address>
					{!! $settingArr['cty_info'] !!}
				</address>
            </div>
            <div class="block-menu-bottom-bottom col-sm-4">
				<label>Thông Tin Mua Bán</label>
                <ul>
                	@if($footerLink)
                	@foreach($footerLink as $link)
					<li><a href="{{ $link->link_url }}" title="{!! $link->link_text !!}">{!! $link->link_text !!}</a></li>
					@endforeach
					@endif
                </ul>
            </div>
    	</div>
    </div>
    <!--<div class="block-info-bottom">
    	<div class="container">
    		<p><strong>CÔNG TY CỔ PHẦN MUA BÁN</strong>. MST: 0102344810, cấp ngày 10/08/2007. SĐT: 08-73001234</p>
    		<p><strong>Trụ sở chính</strong> Số 28-30 Đường số 2, khu phố Hưng Gia 5, phường Tân Phong, Quận 7, TP. Hồ Chí Minh</p>
    		<p>muaban.net có trách nhiệm chuyển tải thông tin. Không chịu bất kỳ trách nhiệm nào từ các tin này. <a href="#" title="">xem chi tiết</a></p>
    	</div>
    </div>-->
</footer><!-- /footer -->