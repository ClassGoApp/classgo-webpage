<div class="am-banner-vfive">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if(!empty(pagesetting('pre_heading_image'))
                    || !empty(pagesetting('pre_heading')) 
                    || !empty(pagesetting('heading')) 
                    || !empty(pagesetting('paragraph')) 
                    || !empty(pagesetting('search_btn_txt')) 
                    || !empty(pagesetting('search_placeholder')) 
                    || !empty(pagesetting('banner_first_image')) 
                    || !empty(pagesetting('banner_second_image')) 
                    || !empty(pagesetting('banner_third_image')) 
                    || !empty(pagesetting('banner_fourth_image')) 
                    || !empty(pagesetting('banner_fifth_image'))): ?>
                    <div class="am-banner"  data-aos="fade-up" data-aos-easing="ease" data-aos-delay="200">
                        <div class="am-banner_wrap">
                            <?php if(!empty(pagesetting('pre_heading_image'))
                                || !empty(pagesetting('pre_heading')) 
                                || !empty(pagesetting('heading')) 
                                || !empty(pagesetting('paragraph')) 
                                || !empty(pagesetting('search_btn_txt')) 
                                || !empty(pagesetting('search_placeholder'))): ?>
                                <div class="am-banner-content">
                                    <?php if(!empty(pagesetting('pre_heading_image')) || !empty(pagesetting('pre_heading'))): ?> 
                                        <span class="am-banner_tag" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="600">
                                            <?php if(!empty(pagesetting('pre_heading_image'))): ?>
                                                <figure>
                                                    <?php if(!empty(pagesetting('pre_heading_image')[0]['path'])): ?>
                                                        <img src="<?php echo e(url(Storage::url(pagesetting('pre_heading_image')[0]['path']))); ?>" alt="Heading image">
                                                    <?php endif; ?>
                                                </figure>
                                            <?php endif; ?>
                                            <?php if(!empty(pagesetting('pre_heading'))): ?> <?php echo e(pagesetting('pre_heading')); ?> <?php endif; ?>
                                        </span>
                                    <?php endif; ?>
                                    <?php if(!empty(pagesetting('heading'))): ?><h1 data-aos="fade-up" data-aos-easing="ease" data-aos-delay="700"><?php echo e(pagesetting('heading')); ?></h1><?php endif; ?>
                                    <?php if(!empty(pagesetting('paragraph'))): ?><p data-aos="fade-up" data-aos-easing="ease" data-aos-delay="800"><?php echo e(pagesetting('paragraph')); ?></p><?php endif; ?>
                                    <?php if(!empty(pagesetting('search_btn_txt')) || !empty(pagesetting('search_placeholder'))): ?> 
                                        <form action="<?php echo e(url('find-tutors')); ?>" method="GET" class="am-learning_search" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="900">
                                            <i class="am-icon-search-02"></i>
                                            <?php if(!empty(pagesetting('search_placeholder'))): ?>
                                                <div class="am-learning_search_input">
                                                    <input type="text" name="keyword" placeholder="<?php echo e(pagesetting('search_placeholder')); ?>">
                                                </div>
                                            <?php endif; ?>
                                            <?php if(!empty(pagesetting('search_btn_txt'))): ?>
                                                <button type="submit" class="am-learning_search_btn am-btn">
                                                    <?php echo e(pagesetting('search_btn_txt')); ?>    
                                                </button>
                                            <?php endif; ?>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <?php if(!empty(pagesetting('banner_first_image')) 
                                || !empty(pagesetting('banner_second_image')) 
                                || !empty(pagesetting('banner_third_image')) 
                                || !empty(pagesetting('banner_fourth_image')) 
                                || !empty(pagesetting('banner_fifth_image'))): ?>
                                <div class="am-banner_images">
                                    <figure>
                                        <?php if(!empty(pagesetting('banner_first_image'))): ?>
                                            <?php if(!empty(pagesetting('banner_first_image')[0]['path'])): ?>
                                                <img src="<?php echo e(url(Storage::url(pagesetting('banner_first_image')[0]['path']))); ?>" data-aos="fade-left" data-aos-easing="ease" data-aos-delay="600" alt="User image">
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <figcaption>
                                            <?php if(!empty(pagesetting('banner_second_image'))): ?>
                                                <?php if(!empty(pagesetting('banner_second_image')[0]['path'])): ?>
                                                    <img  class="am-image-one" src="<?php echo e(url(Storage::url(pagesetting('banner_second_image')[0]['path']))); ?>" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="800" alt="Online user image">
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <?php if(!empty(pagesetting('banner_third_image'))): ?>
                                                <?php if(!empty(pagesetting('banner_third_image')[0]['path'])): ?>
                                                    <img  class="am-image-two" src="<?php echo e(url(Storage::url(pagesetting('banner_third_image')[0]['path']))); ?>" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="900" alt="Users image">
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <?php if(!empty(pagesetting('banner_fourth_image'))): ?>
                                                <?php if(!empty(pagesetting('banner_fourth_image')[0]['path'])): ?>
                                                    <img  class="am-image-three" src="<?php echo e(url(Storage::url(pagesetting('banner_fourth_image')[0]['path']))); ?>" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="1000" alt="Cursor image">
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <?php if(!empty(pagesetting('banner_fifth_image'))): ?>
                                                <?php if(!empty(pagesetting('banner_fifth_image')[0]['path'])): ?>
                                                    <img  class="am-image-four" src="<?php echo e(url(Storage::url(pagesetting('banner_fifth_image')[0]['path']))); ?>" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="1100" alt="Rate experience image">
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </figcaption>
                                    </figure>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php if (! $__env->hasRenderedOnce('5cc160b6-0d59-4976-a10f-b16115ea8893')): $__env->markAsRenderedOnce('5cc160b6-0d59-4976-a10f-b16115ea8893');
$__env->startPush('styles'); ?>
<?php 
$isEdit = str_contains(request()->path(), 'pages') && str_contains(request()->path(), 'iframe');
?>
<?php if(!$isEdit): ?>
    <?php echo app('Illuminate\Foundation\Vite')(['public/css/aos.min.css']); ?>
<?php endif; ?>
<?php $__env->stopPush(); endif; ?>
<?php if (! $__env->hasRenderedOnce('468ec4cf-881f-44d0-b273-6a1f453fe14a')): $__env->markAsRenderedOnce('468ec4cf-881f-44d0-b273-6a1f453fe14a');
$__env->startPush('scripts'); ?>
    <?php if(!$isEdit): ?>
        <script src="<?php echo e(asset('js/aos.min.js')); ?>"></script>
    <?php endif; ?>
    <script section='banner-v5'>
        AOS.init();
    </script>
<?php $__env->stopPush(); endif; ?><?php /**PATH C:\Users\Alejandro\Desktop\classgo\resources\views/pagebuilder/banner-v5/view.blade.php ENDPATH**/ ?>