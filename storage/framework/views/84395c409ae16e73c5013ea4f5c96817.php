
<div class="am-tuition <?php echo e(pagesetting('select_verient')); ?>">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if(!empty(pagesetting('pre_heading')) || !empty(pagesetting('heading')) || !empty(pagesetting('paragraph'))): ?>
                    <div class="am-section_title am-section_title_center <?php echo e(pagesetting('section_title_variation')); ?>">
                        <?php if(!empty(pagesetting('pre_heading'))): ?><span class="am-tag"><?php echo e(pagesetting('pre_heading')); ?></span><?php endif; ?>
                        <?php if(!empty(pagesetting('heading'))): ?><h2><?php echo pagesetting('heading'); ?></h2><?php endif; ?>
                        <?php if(!empty(pagesetting('paragraph'))): ?><p><?php echo pagesetting('paragraph'); ?></p><?php endif; ?>
                    </div>
                <?php endif; ?>
                <div class="am-tuition_content">
                    <?php if(!empty(pagesetting('become_student_heading')) 
                    || !empty(pagesetting('become_student_paragraph'))
                    || !empty(pagesetting('become_student_btn_txt'))
                    || !empty(pagesetting('become_student_btn_url'))
                    || !empty(pagesetting('become_student_image'))): ?>
                        <div class="am-tuition_content_detail" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="200">
                            <?php if(!empty(pagesetting('become_student_heading'))): ?>
                            <h4 data-aos="fade-up" data-aos-easing="ease" data-aos-delay="200"><?php echo pagesetting('become_student_heading'); ?></h4>
                            <?php endif; ?>
                            <?php if(!empty(pagesetting('become_student_paragraph'))): ?>
                            <p data-aos="fade-up" data-aos-easing="ease" data-aos-delay="400"><?php echo pagesetting('become_student_paragraph'); ?></p>
                            <?php endif; ?>
                            <?php if(!empty(pagesetting('become_student_btn_txt')) || !empty(pagesetting('become_student_btn_url'))): ?> 
                                <a href="<?php if(!empty(pagesetting('become_student_btn_url'))): ?> <?php echo e(pagesetting('become_student_btn_url')); ?> <?php endif; ?>" class="am-primary-btn" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="600">
                                    <?php echo e(pagesetting('become_student_btn_txt')); ?>

                                </a>
                            <?php endif; ?>
                            <?php if(!empty(pagesetting('become_student_image')[0]['path'])): ?>
                                <figure class="am-tuition_content_image" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="800">
                                    <img src="<?php echo e(url(Storage::url(pagesetting('become_student_image')[0]['path']))); ?>" alt="Learning community image">
                                </figure>
                            <?php endif; ?>
                            <img class="am-postion-img" src="<?php echo e(asset('demo-content/home-v2/community-element1.png')); ?>" alt="">
                        </div>
                    <?php endif; ?>
                    <?php if(!empty(pagesetting('become_tutor_heading')) 
                    || !empty(pagesetting('become_tutor_paragraph'))
                    || !empty(pagesetting('become_tutor_btn_txt'))
                    || !empty(pagesetting('become_tutor_btn_url'))
                    || !empty(pagesetting('become_tutor_image'))): ?>
                        <div class="am-tuition_content_detail" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="1200">
                            <?php if(!empty(pagesetting('become_tutor_heading'))): ?>
                            <h4 data-aos="fade-up" data-aos-easing="ease" data-aos-delay="1400"><?php echo pagesetting('become_tutor_heading'); ?></h4>
                            <?php endif; ?>
                            <?php if(!empty(pagesetting('become_tutor_paragraph'))): ?>
                            <p data-aos="fade-up" data-aos-easing="ease" data-aos-delay="1600"><?php echo pagesetting('become_tutor_paragraph'); ?></p>
                            <?php endif; ?>
                            <?php if(!empty(pagesetting('become_tutor_btn_txt')) || !empty(pagesetting('become_tutor_btn_url'))): ?> 
                                <a href="<?php if(!empty(pagesetting('become_tutor_btn_url'))): ?> <?php echo e(pagesetting('become_tutor_btn_url')); ?> <?php endif; ?>" class="am-primary-btn" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="1800">
                                    <?php echo e(pagesetting('become_tutor_btn_txt')); ?>

                                </a>
                            <?php endif; ?>
                            <?php if(!empty(pagesetting('become_tutor_image')[0]['path'])): ?>
                                <figure class="am-tuition_content_image" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="2000">
                                    <img src="<?php echo e(url(Storage::url(pagesetting('become_tutor_image')[0]['path']))); ?>" alt="Join as a tutor image">
                                </figure>
                            <?php endif; ?>
                            <img class="am-postion-img2" src="<?php echo e(asset('demo-content/home-v2/community-element2.png')); ?>" alt="">
                        </div>
                    <?php endif; ?>   
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH /home/vzofynbp/classgoapp.com/resources/views/pagebuilder/tuition/view.blade.php ENDPATH**/ ?>