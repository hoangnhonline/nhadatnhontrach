<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse menu" id="bs-example-navbar-collapse-1">
    <div class="text-center logo-menu">
        <a title="Logo" href="home.html"><img src="https://imgholder.ru/204x90/0082D5/fff.jpg') }}&text=My+Logo&font=tahoma&fz=27" alt=""></a>
    </div>
    <ul class="nav navbar-nav navbar-left">
        <li class="level0 <?php echo e($routeName == "home" ? "active" : ""); ?>"><a class="" href="<?php echo e(route('home')); ?>">Trang chủ</a></li><!-- END MENU HOME -->
        <li class="level0 <?php echo e($routeName == "about" ? "active" : ""); ?>"><a class="" href="<?php echo e(route('about')); ?>">Về chúng tôi</a></li><!-- END MENU HOME -->
        <li class="level0 <?php echo e(in_array($routeName, ['du-an', 'detail-project', 'tab']) ? "active" : ""); ?>"><a href="<?php echo e(route('du-an')); ?>">Dự án</a></li>
        <li class="level0 parent <?php echo e((in_array($routeName, ['ban', 'danh-muc', 'chi-tiet']) && isset($type) && $type == 1) ? "active" : ""); ?>">
            <a href="<?php echo e(route('ban')); ?>">Cần bán</a>
            <ul class="level0 submenu">
                <?php foreach($banList as $ban): ?>
                <li class="level1"><a href="<?php echo e(route('danh-muc', $ban->slug )); ?>"><?php echo $ban->name; ?></a>
                <?php if($ban->cate->count() > 0): ?>
                <ul class="level0 submenu">
                   <?php foreach($ban->cate as $cate): ?>
                   <?php if($cate->status == 1): ?>
                    <li class="level1"><a href="<?php echo e(route('danh-muc-con', [$ban->slug, $cate->slug] )); ?>"><?php echo $cate->name; ?></a></li>                    
                    <?php endif; ?>       
                   <?php endforeach; ?>
                </ul>
                <?php endif; ?>
                </li>                         
                <?php endforeach; ?>
            </ul>
        </li><!-- END MENU SHOP -->
        <li class="level0 <?php echo e((in_array($routeName, ['cho-thue', 'danh-muc', 'chi-tiet']) && isset($type) && $type == 2) ? "active" : ""); ?>"><a href="<?php echo e(route('cho-thue')); ?>">Cho thuê</a>
            <ul class="level0 submenu">
                <?php foreach($thueList as $thue): ?>
                <li class="level1"><a href="<?php echo e(route('danh-muc', $thue->slug )); ?>"><?php echo $thue->name; ?></a></li><?php if($ban->cate->count() > 0): ?>
                <ul class="level0 submenu">
                   <?php foreach($thue->cate as $cate): ?>
                   <?php if($cate->status == 1): ?>
                    <li class="level1"><a href="<?php echo e(route('danh-muc-con', [$thue->slug, $cate->slug] )); ?>"><?php echo $cate->name; ?></a></li>                    
                    <?php endif; ?>       
                   <?php endforeach; ?>
                </ul>
                <?php endif; ?>                          
                <?php endforeach; ?>
            </ul>
        </li><!-- END MENU BLOG -->
        
        <?php foreach($articleCate as $value): ?>
        <?php if($value->show_menu == 1): ?>
        <li class="level0 <?php echo e((isset($cateDetail) && $cateDetail->id == $value->id) ? "active" : ""); ?>"><a href="<?php echo e(route('news-list', $value->slug)); ?>"><?php echo $value->name; ?></a></li>
        <?php endif; ?>
        <?php endforeach; ?>
        <li class="level0 <?php echo e($routeName == "contact" ? "active" : ""); ?>"><a class="" href="<?php echo e(route('contact')); ?>">Liên hệ</a></li><!-- END MENU HOME -->
    </ul>
</div><!-- /.navbar-collapse -->