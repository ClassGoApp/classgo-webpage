
<section class="am-vision-section">
    <div class="container-fluaid">
        <?php if(!empty(pagesetting('video'))
            || !empty(pagesetting('pre_heading')) 
            || !empty(pagesetting('heading')) 
            || !empty(pagesetting('paragraph')) 
            || !empty(pagesetting('list_data'))
            || !empty(pagesetting('discover_more_btn_text'))
            || !empty(pagesetting('discover_more_btn_url'))): ?>
            <div class="row">
                <?php if(!empty(pagesetting('video'))): ?>
                    <div class="col-12 col-lg-6">
                        <?php if(!empty(pagesetting('video')[0]['path'])): ?>
                            <video class="video-js" data-setup='{}' preload="auto" id="vision-video" width="940" height="737" controls >
                                <source src="<?php echo e(url(Storage::url(pagesetting('video')[0]['path']))); ?>#t=0.1" wire:key="auth-video-src" type="video/mp4" >
                            </video>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php if(!empty(pagesetting('pre_heading')) 
                    || !empty(pagesetting('heading')) 
                    || !empty(pagesetting('paragraph')) 
                    || !empty(pagesetting('list_data'))
                    || !empty(pagesetting('discover_more_btn_text'))
                    || !empty(pagesetting('discover_more_btn_url'))): ?>
                    <div class="col-12 col-lg-6">
                        <div class="am-tutor-vision">
                            <div class="am-content_box am-left-text">
                                <?php if(!empty(pagesetting('pre_heading'))): ?> <span><?php echo e(pagesetting('pre_heading')); ?></span> <?php endif; ?> 
                                <?php if(!empty(pagesetting('heading'))): ?> <h3><?php echo pagesetting('heading'); ?></h3> <?php endif; ?>
                                <?php if(!empty(pagesetting('paragraph'))): ?> <p><?php echo pagesetting('paragraph'); ?></p> <?php endif; ?>
                                <?php if(!empty( pagesetting('list_data'))): ?>
                                    <ul>
                                        <?php $__currentLoopData = pagesetting('list_data'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(!empty($data['item_heading']) || !empty($data['list_item'])): ?> 
                                                <li>
                                                    <span>
                                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                            <path d="M7.5 0.5L9.52568 5.97432L15 8L9.52568 10.0257L7.5 15.5L5.47432 10.0257L0 8L5.47432 5.97432L7.5 0.5Z" fill="#F55C2B"/>
                                                        </svg>
                                                    </span>
                                                    <?php if(!empty($data['item_heading']) || !empty($data['list_item'])): ?> 
                                                        <div class="am-content_list">
                                                            <h6><?php echo $data['item_heading']; ?></h6>
                                                            <p><?php echo $data['list_item']; ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                <?php endif; ?>
                                <?php if(!empty(pagesetting('discover_more_btn_text'))): ?>
                                    <a href="<?php if(!empty(pagesetting('discover_more_btn_url'))): ?> <?php echo e(pagesetting('discover_more_btn_url')); ?> <?php endif; ?>" class="am-marketplace_content_list_btn">
                                        <?php echo e(pagesetting('discover_more_btn_text')); ?>

                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php if (! $__env->hasRenderedOnce('01092e21-246c-43f5-8d53-55d394dd8a69')): $__env->markAsRenderedOnce('01092e21-246c-43f5-8d53-55d394dd8a69');
$__env->startPush('styles'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['public/css/videojs.css']); ?>
<?php $__env->stopPush(); endif; ?>
<?php if (! $__env->hasRenderedOnce('a24ee8c2-3a1e-42cd-b4cb-ccf5e4aa43a9')): $__env->markAsRenderedOnce('a24ee8c2-3a1e-42cd-b4cb-ccf5e4aa43a9');
$__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('js/video.min.js')); ?>"></script>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            setTimeout(() => {
                visionVideoJs();
            }, 500);
        }); 

        document.addEventListener('loadSectionJs', (event) => {
            if(event.detail.sectionId === 'vision'){
                visionVideoJs();
            }
        }); 

        function visionVideoJs(){
            if(typeof videojs !== 'undefined'){
                jQuery('.video-js').each((index, item) => {
                    item.onloadeddata =  function(){
                        videojs(item);
                    }
                })
            }
        }       
    </script>
<?php $__env->stopPush(); endif; ?><?php /**PATH C:\Users\Alejandro\Desktop\classgo\resources\views/pagebuilder/vision/view.blade.php ENDPATH**/ ?>