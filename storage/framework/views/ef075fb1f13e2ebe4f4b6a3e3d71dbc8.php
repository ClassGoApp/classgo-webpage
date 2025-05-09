
<div class="am-banner-potential am-banner-content-four">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if(!empty(pagesetting('heading')) 
                    || !empty(pagesetting('paragraph')) 
                    || !empty(pagesetting('primary_btn_url')) 
                    || !empty(pagesetting('primary_btn_txt')) 
                    || !empty(pagesetting('secondary_btn_url')) 
                    || !empty(pagesetting('secondary_btn_txt'))): ?>
                    <div class="am-banner-main">
                        <div class="am-banner-tutor">
                            <?php if(!empty(pagesetting('heading'))): ?><h2 data-aos="fade-up" data-aos-easing="ease" data-aos-delay="200"><?php echo pagesetting('heading'); ?></h2><?php endif; ?>
                            <?php if(!empty(pagesetting('paragraph'))): ?><p data-aos="fade-up" data-aos-easing="ease" data-aos-delay="300"  data-aos-anchor-placement="bottom-bottom"><?php echo pagesetting('paragraph'); ?></p><?php endif; ?>
                            <?php if(empty(pagesetting('primary_btn_url')) 
                                || !empty(pagesetting('primary_btn_txt')) 
                                || !empty(pagesetting('secondary_btn_url')) 
                                || !empty(pagesetting('secondary_btn_txt'))): ?>
                                <div class="am-explore-banner-button" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="400">
                                    <?php if(!empty(pagesetting('primary_btn_txt'))): ?> 
                                        <a href="<?php if(!empty(pagesetting('primary_btn_url'))): ?> <?php echo e(pagesetting('primary_btn_url')); ?> <?php endif; ?>" class="am-explore-btn"> 
                                            <?php echo e(pagesetting('primary_btn_txt')); ?>

                                        </a>
                                    <?php endif; ?>
                                    <?php if(!empty(pagesetting('secondary_btn_txt'))): ?> 
                                        <a href="<?php if(!empty(pagesetting('secondary_btn_url'))): ?> <?php echo e(pagesetting('secondary_btn_url')); ?> <?php endif; ?>" class="am-explore-btn am-demo-btn tu-themegallery tu-thumbnails_content" data-autoplay="true" data-vbtype="video"">
                                            <i class="am-icon-play-filled"></i>
                                            <?php echo e(pagesetting('secondary_btn_txt')); ?>

                                        </a>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if(!empty(pagesetting('banner_repeater'))): ?>
                            <ul class="am-banner_companies am-banner-image" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="500">
                                <?php $__currentLoopData = pagesetting('banner_repeater'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(!empty($option['banner_image'])): ?>
                                        <?php if(!empty($option['banner_image'][0]['path'])): ?>
                                            <li><figure><img src="<?php echo e(url(Storage::url($option['banner_image'][0]['path']))); ?>" alt="Company logo"></figure></li>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php if(!empty(pagesetting('bg_img_one')) || !empty(pagesetting('bg_img_two')) || !empty(pagesetting('bg_img_three'))): ?>
        <?php if(!empty(pagesetting('bg_img_one'))): ?>
            <img class="am-bgimg1" src="<?php echo e(url(Storage::url(pagesetting('bg_img_one')[0]['path']))); ?>" alt="Background shape image"> 
        <?php endif; ?>
        <?php if(!empty(pagesetting('bg_img_two'))): ?>
            <img class="am-bgimg2" src="<?php echo e(url(Storage::url(pagesetting('bg_img_two')[0]['path']))); ?>" alt="Background shape image"> 
        <?php endif; ?>
        <?php if(!empty(pagesetting('bg_img_three'))): ?>
            <img class="am-bgimg3" src="<?php echo e(url(Storage::url(pagesetting('bg_img_three')[0]['path']))); ?>" alt="Background shape image"> 
        <?php endif; ?>
    <?php endif; ?>
    <img class="am-bgimg4" src="<?php echo e(asset('demo-content/home-v2/banner/bg-boxs.png')); ?>" alt="Background shape image">
</div>

<?php if (! $__env->hasRenderedOnce('7247d961-512c-4fa8-ae9a-69c615c09270')): $__env->markAsRenderedOnce('7247d961-512c-4fa8-ae9a-69c615c09270');
$__env->startPush('styles'); ?>
<?php 
$isEdit = str_contains(request()->path(), 'pages') && str_contains(request()->path(), 'iframe');
?>
<?php if(!$isEdit): ?>
    <?php echo app('Illuminate\Foundation\Vite')(['public/css/aos.min.css']); ?>
<?php endif; ?>
<?php echo app('Illuminate\Foundation\Vite')(['public/css/venobox.min.css']); ?>
<?php $__env->stopPush(); endif; ?>
<?php if (! $__env->hasRenderedOnce('efa705d0-98ce-4588-85cc-d4698a09096a')): $__env->markAsRenderedOnce('efa705d0-98ce-4588-85cc-d4698a09096a');
$__env->startPush('scripts'); ?>
    <?php if(!$isEdit): ?>
        <script src="<?php echo e(asset('js/aos.min.js')); ?>"></script>
    <?php endif; ?>
    <script defer src="<?php echo e(asset('js/venobox.min.js')); ?>"></script>
    <script section='banner-v4'>
        document.addEventListener('DOMContentLoaded', (event) => {
            initVenobox()
        });
        AOS.init();
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH C:\Users\Alejandro\Desktop\classgo\resources\views/pagebuilder/banner-v4/view.blade.php ENDPATH**/ ?>