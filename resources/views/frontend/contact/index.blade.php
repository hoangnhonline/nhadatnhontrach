@extends('frontend.layout') 
@include('frontend.partials.meta') 
@section('content')

<article class="block-breadcrumb-page">
    <ul class="breadcrumb"> 
        <li><a href="{{ route('home') }}" title="Trở về trang chủ">Trang chủ</a></li>           
        <li class="active">Liên hệ</li>
    </ul>
</article>
<div class="container contact">
  <div class="row">
    <div class="col-md-4">
      <div class="widget-item info-contact in-fo-page-content">
        <h1 class="title-head">Thông tin liên hệ</h1>
        <!-- End .widget-title -->
        
        <h4>CÔNG TY TNHH TM KT GIA GIA PHÚ</h4>
        
        <ul class="widget-menu contact-info-page">
          
          <li><i class="fa fa-map-marker" aria-hidden="true"></i> 22 đường số 8 Cư xá Bình Thới, Phường 8 Quận 11, Tp Hồ Chí Minh</li>
         
          <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:02839626288">028 39 62 62 88 - 028 39 62 62 99</a></li>
          <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:anhthu@giagiaphu.com.vn">anhthu@giagiaphu.com.vn</a></li>
          
        </ul>
        <!-- End .widget-menu -->
      </div>
      <div class="box-maps margin-top-10 margin-bottom-10">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.656869219266!2d106.64812471513916!3d10.760906062421732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752e92f3d4b18d%3A0x372438f63e76a724!2zMjIgxJDGsOG7nW5nIFPhu5EgOCwgUGjGsOG7nW5nIDgsIFF14bqtbiAxMSwgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1539679491625" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
    <div class="col-md-8">
      <div class="page-login">
        <div id="login">
          <h3 class="title-head">Gửi thông tin</h3>         
          <form accept-charset="UTF-8" action="/contact" id="contact" method="post" class="has-validation-callback">
<input name="FormType" type="hidden" value="contact">
<input name="utf8" type="hidden" value="true">
          
          <div class="form-signup clearfix">
            <div class="row">
              <div class="col-sm-6 col-xs-12">
                <fieldset class="form-group">
                  <label>Họ tên<span class="required">*</span></label>
                  <input type="text" name="contact[name]" id="name" class="form-control  form-control-lg" data-validation-error-msg="Không được để trống" data-validation="required" required="">
                </fieldset>
              </div>
              <div class="col-sm-6 col-xs-12">
                <fieldset class="form-group">
                  <label>Email<span class="required">*</span></label>
                  <input type="email" name="contact[email]" data-validation="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" data-validation-error-msg="Email sai định dạng" id="email" class="form-control form-control-lg" required="">
                </fieldset>
              </div>
              <div class="col-sm-12 col-xs-12">
                <fieldset class="form-group">
                  <label>Điện thoại<span class="required">*</span></label>
                  <input type="tel" name="contact[phone]" data-validation="tel" data-validation-error-msg="Không được để trống" id="tel" class="number-sidebar form-control form-control-lg" required="">
                </fieldset>
              </div>
              <div class="col-sm-12 col-xs-12">
                <fieldset class="form-group">
                  <label>Nội dung<span class="required">*</span></label>
                  <textarea name="contact[body]" id="comment" class="form-control form-control-lg" rows="5" data-validation-error-msg="Không được để trống" data-validation="required" required=""></textarea>
                </fieldset>
                <div class="pull-xs-left" style="margin-top:20px;">
                  <button type="submit" class="btn btn-blues btn-style btn-style-active">Gửi tin nhắn</button>
                </div> 
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
