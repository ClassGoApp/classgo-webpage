<section class="am-feature-tutors <?php echo e(pagesetting('select_verient')); ?> <?php echo e(pagesetting('style_verient')); ?>">
    <?php if(!empty(pagesetting('1st_shape_image'))): ?>
        <img class="am-shap-img" src="<?php echo e(url(Storage::url(pagesetting('1st_shape_image')[0]['path']))); ?>" alt="Background shape image"> 
    <?php endif; ?>
    <?php if(!empty(pagesetting('2nd_shape_image'))): ?>
        <img class="am-shap-img-1" src="<?php echo e(url(Storage::url(pagesetting('2nd_shape_image')[0]['path']))); ?>" alt="Background shape image">
    <?php endif; ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if(!empty(pagesetting('pre_heading')) || !empty(pagesetting('heading')) || !empty(pagesetting('paragraph'))): ?>
                    <div class="am-tutor-experience">
                        <?php if(!empty(pagesetting('pre_heading')) || !empty(pagesetting('heading')) || !empty(pagesetting('paragraph'))): ?>
                            <div class="am-section_title am-section_title_center <?php echo e(pagesetting('section_title_variation')); ?>">
                                <?php if(!empty(pagesetting('pre_heading'))): ?> <span><?php echo e(pagesetting('pre_heading')); ?></span> <?php endif; ?> 
                                <?php if(!empty(pagesetting('heading'))): ?> <h2><?php echo pagesetting('heading'); ?></h2> <?php endif; ?>
                                <?php if(!empty(pagesetting('paragraph'))): ?> <p><?php echo pagesetting('paragraph'); ?></p> <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php
                    $sectionVerient     = !empty(pagesetting('select_verient')) ? pagesetting('select_verient') : 'am-tutors-varient-two';
                    $viewProfileBtn     = !empty(pagesetting('view_tutor_btn_text')) ? pagesetting('view_tutor_btn_text') : 'View Profile';
                    $viewProfileBtnUrl  = !empty(pagesetting('view_tutor_btn_url')) ? pagesetting('view_tutor_btn_url') : '#';
                    $selectTutor        = !empty(pagesetting('select_tutor')) ? pagesetting('select_tutor') : 8;
                ?>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('experienced-tutors', ['sectionVerient' => $sectionVerient,'viewProfileBtn' => $viewProfileBtn,'viewProfileBtnUrl' => $viewProfileBtnUrl,'selectTutor' => $selectTutor]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1618884553-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            </div>
        </div>
    </div>
</section>
<?php if (! $__env->hasRenderedOnce('f8345d54-8bbb-4ae0-b435-a20bcb6dc388')): $__env->markAsRenderedOnce('f8345d54-8bbb-4ae0-b435-a20bcb6dc388');
$__env->startPush('styles'); ?>
<?php echo app('Illuminate\Foundation\Vite')(['public/css/videojs.css']); ?>
<?php $__env->stopPush(); endif; ?>
<?php if (! $__env->hasRenderedOnce('b24f3ba0-f4d7-48ce-9d7e-861c7e7fcdc0')): $__env->markAsRenderedOnce('b24f3ba0-f4d7-48ce-9d7e-861c7e7fcdc0');
$__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('js/video.min.js')); ?>"></script>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
                setTimeout(() => {
                    jQuery('.video-js').each((index, item) => {
                        item.onloadeddata =  function(){
                            videojs(item);
                        }
                    })
                }, 500);
            });
    </script>
<?php $__env->stopPush(); endif; ?><?php /**PATH C:\Users\Alejandro\Desktop\classgo\resources\views/pagebuilder/experienced-tutors/view.blade.php ENDPATH**/ ?>