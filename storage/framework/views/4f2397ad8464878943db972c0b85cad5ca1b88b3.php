<?php echo $__env->make('frontend.partials.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<section class="col-sm-8 col-xs-12 block-sitemain">
  <article class="block block-news-default row">
    
    <div class="block-news-default-left">
    <?php if(isset($tinThiTruong[0])): ?>
      <div class="col-sm-7 col-xs-12">
        <div class="block-news-default-item">
          <div class="block-thumb">
            <a href="<?php echo e(route('news-detail', ['slug' => $tinThiTruong[0]['slug'], 'id' => $tinThiTruong[0]['id']])); ?>" title="">
              <img src="<?php echo e($tinThiTruong[0]['image_url'] ? Helper::showImageThumb($tinThiTruong[0]['image_url'], 2, '325x200') : URL::asset('backend/dist/img/no-image.jpg')); ?>" alt="">
            </a>
          </div>
          <h2 class="block-title">
                  <a href="<?php echo e(route('news-detail', ['slug' => $tinThiTruong[0]['slug'], 'id' => $tinThiTruong[0]['id']])); ?>" title=""><?php echo $tinThiTruong[0]['title']; ?></a>
              </h2>
            </div><!-- /block-news-default-item -->
      </div>
      <?php endif; ?>
    </div><!-- /block-news-default-left -->

    <div class="block-news-default-right">
      <div class="col-sm-5 col-xs-12 block-pl0">
        <ul class="block-news-list-right">
        <?php $i =0; ?>
          <?php foreach($tinThiTruong as $tin): ?>
          <?php $i++; 
          ?>
          <?php if($i > 1): ?>
          <li><h3><a href="<?php echo e(route('news-detail', ['slug' => $tin['slug'], 'id' => $tin['id']])); ?>" title=""><?php echo $tin['title']; ?></a></h3></li>
          <?php endif; ?>
          <?php endforeach; ?>
        </ul>
      </div>
    </div><!-- /block-news-default-right -->
  </article><!-- /block-news-default -->

  <article class="block block-news-new clearfix">
    <div class="col-sm-12 col-xs-12">      
        <div class="row">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
              <a href="#trmn1" aria-controls="trmn1" role="tab" data-toggle="tab">BĐS BÁN</a>
            </li>
            <li role="presentation">
              <a href="#trmn2" aria-controls="trmn2" role="tab" data-toggle="tab">BĐS CHO THUÊ</a>
            </li>
          </ul>
          
          <div class="block-contents">
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="trmn1">
                <ul>                  
                  <?php foreach($hotProduct as $product): ?>
                    <li class="news-new-item">                      
                      <div class="news-new-item-head">
                        <a  href="<?php echo e(route('chi-tiet', [$product->slug_loai, $product->slug, $product->id])); ?>"><img  title="<?php echo e($product->title); ?>" src="<?php echo e($product->image_urls ? Helper::showImageThumb($product->image_urls) : URL::asset('backend/dist/img/no-image.jpg')); ?>" alt="<?php echo $product->title; ?>" > 
                        
                        
                      </div>
                      <div class="news-new-item-description">
                        <h4>
                        <a class="description-title vip1" href="<?php echo e(route('chi-tiet', [$product->slug_loai, $product->slug, $product->id])); ?>"><?php if( $product->is_hot == 1 ): ?>
                        <img class="img-hot" src="<?php echo e(URL::asset('backend/dist/img/star.png')); ?>" alt="Nổi bật" title="Nổi bật" />
                        <?php endif; ?> <?php echo $product->title; ?></a></h4>
                            <div class="description-info">
                              <div class="id-post"><i class="fa fa-rebel" aria-hidden="true"></i><label>Mã tin<span>:</span></label><?php echo e($product->id); ?></div>
                              <div class="price"><label>Giá<span>:</span></label><?php echo $product->price; ?> <?php echo e(Helper::getName($product->price_unit_id, 'price_unit')); ?>                                
                                <?php if($product->type == 1): ?>
                                    <?php if($product->cart_status == 1): ?>
                                      <span class="label label-primary">Chưa bán</span>
                                    <?php else: ?>
                                      <span class="label label-danger">Đã bán</span>
                                    <?php endif; ?>              
                                <?php else: ?>
                                    <?php if($product->cart_status == 1): ?>
                                      <span class="label label-primary">Còn trống</span>
                                    <?php else: ?>
                                      <span class="label label-danger">Đã thuê</span>
                                    <?php endif; ?>
                                <?php endif; ?>

                              </div>
                                <div class="area"><label>Diện tích<span>:</span></label><?php echo $product->area; ?> m<sup>2</sup></div>
                                <div class="location"><label>Vị trí<span>:</span></label><?php echo Helper::getName($product->district_id, 'district'); ?> - <?php echo Helper::getName($product->city_id, 'city'); ?></div>
                            </div>
                            <span class="date"><?php echo e(date('d/m/Y', strtotime($product->updated_at))); ?></span>
                      </div>
                    </li> 
                    <?php endforeach; ?>   
                 
                </ul>                      
              </div><!-- /home -->
              <div role="tabpanel" class="tab-pane" id="trmn2">
                  <ul>
                  <?php foreach($hotProduct2 as $product): ?>
                    <li class="news-new-item">                      
                      <div class="news-new-item-head">
                        <a  href="<?php echo e(route('chi-tiet', [$product->slug_loai, $product->slug, $product->id])); ?>"><img  title="<?php echo e($product->title); ?>" src="<?php echo e($product->image_urls ? Helper::showImageThumb($product->image_urls) : URL::asset('backend/dist/img/no-image.jpg')); ?>" alt="<?php echo $product->title; ?>" >
                        </a>
                        
                      </div>
                      <div class="news-new-item-description">
                        <h4><a class="description-title vip1" href="<?php echo e(route('chi-tiet', [$product->slug_loai, $product->slug, $product->id])); ?>"><?php if( $product->is_hot == 1 ): ?>
                        <img class="img-hot" src="<?php echo e(URL::asset('backend/dist/img/star.png')); ?>" alt="Nổi bật" title="Nổi bật" />
                        <?php endif; ?> <?php echo $product->title; ?></a></h4>
                            <div class="description-info">
                              <div class="id-post"><i class="fa fa-rebel" aria-hidden="true"></i><label>Mã tin<span>:</span></label><?php echo e($product->id); ?></div>
                              <div class="price"><label>Giá<span>:</span></label><?php echo $product->price; ?> <?php echo Helper::getName($product->price_unit_id, 'price_unit'); ?></div>
                                <div class="area"><label>Diện tích<span>:</span></label><?php echo $product->area; ?> m<sup>2</sup></div>
                                <div class="location"><label>Vị trí<span>:</span></label><?php echo Helper::getName($product->district_id, 'district'); ?> - <?php echo Helper::getName($product->city_id, 'city'); ?></div>
                            </div>
                            <span class="date"><?php echo e(date('d/m/Y', strtotime($product->updated_at))); ?></span>
                      </div>
                    </li> 
                    <?php endforeach; ?>   
                 
                </ul>        
              </div><!-- /profile -->
            </div>
          </div>
        </div>
    </div>
  </article><!-- /block-news-new -->
  
  <article class="block block-fengshui clearfix">
    <div class="col-sm-12 col-xs-12">
      <div class="row">
        <div class="block-title block-title-common">          
          <h3><span class="icon-tile2"><img src="<?php echo e(URL::asset('assets/images/icon-tvl.png')); ?>" alt="Hỗ trợ pháp lý"></span> Hỗ trợ pháp lý</h3>
        </div>
        <div class="block-contents">
          <div class="news-fengshui clearfix">
              <?php if(isset($luat[0])): ?>
              <div class="fengshui-news-hot">
              <a href="<?php echo e(route('news-detail', ['slug' => $luat[0]['slug'], 'id' => $luat[0]['id']])); ?>" title="<?php echo $luat[0]['title']; ?>">
                <img src="<?php echo e($luat[0]['image_url'] ? Helper::showImageThumb($luat[0]['image_url'], 2, '325x200') : URL::asset('backend/dist/img/no-image.jpg')); ?>" alt="<?php echo $luat[0]['title']; ?>">
              </a>    
                    
                    <h4><a href="<?php echo e(route('news-detail', ['slug' => $luat[0]['slug'], 'id' => $luat[0]['id']])); ?>" title="<?php echo $luat[0]['title']; ?>"><?php echo $luat[0]['title']; ?></a></h4>
                </div>
                <?php endif; ?>
                <div class="fengshui-news-list">
                  <ul>
                    <?php $i =0; ?>
                  <?php foreach($luat as $tin): ?>
                  <?php $i++; 
                  ?>
                  <?php if($i > 1): ?>
                  <li><a href="<?php echo e(route('news-detail', ['slug' => $tin['slug'], 'id' => $tin['id']])); ?>" title="<?php echo $tin['title']; ?>"><?php echo $tin['title']; ?></a></li>
                  <?php endif; ?>
                  <?php endforeach; ?>
                    
                  </ul>
                </div>
          </div>
        </div>
      </div>
    </div>
  </article><!-- /block block-fengshui -->
  <article class="block block-fengshui clearfix">
    <div class="col-sm-12 col-xs-12">
      <div class="row">
        <div class="block-title block-title-common">
          <h3><span class="icon-tile2"><img src="<?php echo e(URL::asset('assets/images/icon-tkkt.png')); ?>" alt="Hỗ trợ tài chính"> Hỗ trợ tài chính</h3>
        </div>
        <div class="block-contents">

          <div class="news-fengshui clearfix">
           <?php if(isset($tuvan[0])): ?>
            <div class="fengshui-news-hot">
                    <a href="<?php echo e(route('news-detail', ['slug' => $tuvan[0]['slug'], 'id' => $tuvan[0]['id']])); ?>" title="<?php echo $tuvan[0]['title']; ?>">
                <img src="<?php echo e($tuvan[0]['image_url'] ? Helper::showImageThumb($tuvan[0]['image_url'], 2) : URL::asset('backend/dist/img/no-image.jpg')); ?>" alt="<?php echo $tuvan[0]['title']; ?>">
              </a>    
                    
                    <h4><a href="<?php echo e(route('news-detail', ['slug' => $tuvan[0]['slug'], 'id' => $tuvan[0]['id']])); ?>" title="<?php echo $tuvan[0]['title']; ?>"><?php echo $tuvan[0]['title']; ?></a></h4>
                </div>
                <?php endif; ?>
                <div class="fengshui-news-list">
                  <ul>
                     <?php $i =0; ?>
                      <?php foreach($tuvan as $tin): ?>
                      <?php $i++; 
                      ?>
                      <?php if($i > 1): ?>
                      <li><a href="<?php echo e(route('news-detail', ['slug' => $tin['slug'], 'id' => $tin['id']])); ?>" title="<?php echo $tin['title']; ?>"><?php echo $tin['title']; ?></a></li>
                      <?php endif; ?>
                      <?php endforeach; ?>
                  </ul>
                </div>
          </div>
        </div>
      </div>
    </div>
  </article><!-- /block-fengshui -->
  

</section><!-- /block-site-left -->
<?php $__env->stopSection(); ?>