<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['page'=> null]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['page'=> null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php
    $footerVariations = setting('_front_page_settings.footer_variation_for_pages');
    $footerVariation  = '';
    if (!empty($footerVariations)) {
        foreach ($footerVariations as $key => $variation) {
           if($variation['page_id'] == $page?->id) {
                $footerVariation = $variation['footer_variation'];
                break;
           }
        }
    }
?>

<?php if($footerVariation != 'am-footer_three'): ?>
    <footer class="<?php echo \Illuminate\Support\Arr::toCssClasses(['am-footer', $footerVariation]); ?>">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="am-footer_wrap">
                        <div class="am-footer_logoarea">
                            <strong class="am-flogo">
                                <?php if (isset($component)) { $__componentOriginal8892e718f3d0d7a916180885c6f012e7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8892e718f3d0d7a916180885c6f012e7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.application-logo','data' => ['variation' => 'white']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('application-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variation' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('white')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8892e718f3d0d7a916180885c6f012e7)): ?>
<?php $attributes = $__attributesOriginal8892e718f3d0d7a916180885c6f012e7; ?>
<?php unset($__attributesOriginal8892e718f3d0d7a916180885c6f012e7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8892e718f3d0d7a916180885c6f012e7)): ?>
<?php $component = $__componentOriginal8892e718f3d0d7a916180885c6f012e7; ?>
<?php unset($__componentOriginal8892e718f3d0d7a916180885c6f012e7); ?>
<?php endif; ?>
                            </strong>
                            <?php if(!empty(setting('_front_page_settings.footer_paragraph'))): ?>
                                <p><?php echo setting('_front_page_settings.footer_paragraph'); ?></p>
                            <?php endif; ?>
                            <?php if(
                                !empty(setting('_front_page_settings.footer_contact')) ||
                                !empty(setting('_front_page_settings.footer_email')) ||
                                !empty(setting('_front_page_settings.footer_address'))
                            ): ?>
                                <ul class="am-footer_contact">
                                    <?php if(!empty(setting('_front_page_settings.footer_contact'))): ?>
                                        <li>
                                            <a href="tel:<?php echo setting('_front_page_settings.footer_contact'); ?>"><i class="am-icon-audio-03"></i><?php echo setting('_front_page_settings.footer_contact'); ?></a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if(!empty(setting('_front_page_settings.footer_email'))): ?>
                                        <li>
                                            <a href="mailto:hello@gmail.com"><i class="am-icon-email-01"></i><?php echo setting('_front_page_settings.footer_email'); ?></a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if(!empty(setting('_front_page_settings.footer_address'))): ?>
                                        <li>
                                            <address><i class="am-icon-location"></i><?php echo setting('_front_page_settings.footer_address'); ?></address>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            <?php endif; ?>
                            <?php if(
                                !empty( setting('_general.fb_link')) ||
                                !empty( setting('_general.insta_link')) ||
                                !empty(setting('_general.linkedin_link')) ||
                                !empty(setting('_general.yt_link')) ||
                                !empty(setting('_general.tiktok_link'))
                                ): ?>
                                <ul class="am-socialmedia">
                                    <?php if( !empty( setting('_general.fb_link'))): ?>
                                        <li>
                                            <a href="<?php echo e(setting('_general.fb_link')); ?>">
                                                <i class="am-icon-facebook"></i>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if( !empty( setting('_general.insta_link'))): ?>
                                        <li>
                                            <a href="<?php echo e(setting('_general.insta_link')); ?>">
                                                <i class="am-icon-instagram"></i>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if( !empty( setting('_general.linkedin_link'))): ?>
                                        <li>
                                            <a href="<?php echo e(setting('_general.linkedin_link')); ?>">
                                                <i class="am-icon-linkedin"></i>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if( !empty( setting('_general.yt_link'))): ?>
                                        <li>
                                            <a href="<?php echo e(setting('_general.yt_link')); ?>">
                                                <i class="am-icon-youtube"></i>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if( !empty( setting('_general.tiktok_link'))): ?>
                                        <li>
                                            <a href="<?php echo e(setting('_general.tiktok_link')); ?>">
                                                <i class="am-icon-tiktok"></i>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            <?php endif; ?>
                             <?php if(!empty(setting('_front_page_settings.footer_button_text'))): ?>
                                <a 
                                    href="<?php echo e(!empty(setting('_front_page_settings.footer_button_url')) ? url(setting('_front_page_settings.footer_button_url'))  : '#'); ?>"
                                    class="am-btn"
                                >
                                    <?php echo e(setting('_front_page_settings.footer_button_text')); ?>

                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="am-fnavigation_wrap">
                            <nav class="am-fnavigation">
                                <div class="am-fnavigation_title">
                                    <h3><?php echo e(setting('_front_page_settings.quick_links_heading')); ?></h3>
                                </div>
                                <?php if(!empty(getMenu('footer', 'Footer menu 1'))): ?>
                                <ul>
                                    <?php $__currentLoopData = getMenu('footer', 'Footer menu 1'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if (isset($component)) { $__componentOriginalce95f69c1ef890487f9ea684119db87d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce95f69c1ef890487f9ea684119db87d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menu-item','data' => ['menu' => $item]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['menu' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce95f69c1ef890487f9ea684119db87d)): ?>
<?php $attributes = $__attributesOriginalce95f69c1ef890487f9ea684119db87d; ?>
<?php unset($__attributesOriginalce95f69c1ef890487f9ea684119db87d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce95f69c1ef890487f9ea684119db87d)): ?>
<?php $component = $__componentOriginalce95f69c1ef890487f9ea684119db87d; ?>
<?php unset($__componentOriginalce95f69c1ef890487f9ea684119db87d); ?>
<?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <?php endif; ?>
                            </nav>
                            <nav class="am-fnavigation">
                                 <div class="am-fnavigation_title">
                                    <h3><?php echo e(setting('_front_page_settings.tutors_by_country_heading')); ?></h3>
                                </div>
                                <?php if(!empty(getMenu('footer', 'Footer menu 2'))): ?>
                                <ul>
                                    <?php $__currentLoopData = getMenu('footer', 'Footer menu 2'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if (isset($component)) { $__componentOriginalce95f69c1ef890487f9ea684119db87d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce95f69c1ef890487f9ea684119db87d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menu-item','data' => ['menu' => $item]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['menu' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce95f69c1ef890487f9ea684119db87d)): ?>
<?php $attributes = $__attributesOriginalce95f69c1ef890487f9ea684119db87d; ?>
<?php unset($__attributesOriginalce95f69c1ef890487f9ea684119db87d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce95f69c1ef890487f9ea684119db87d)): ?>
<?php $component = $__componentOriginalce95f69c1ef890487f9ea684119db87d; ?>
<?php unset($__componentOriginalce95f69c1ef890487f9ea684119db87d); ?>
<?php endif; ?> 
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <?php endif; ?>
                            </nav>
                            <nav class="am-fnavigation">
                               <div class="am-fnavigation_title">
                                    <h3><?php echo e(setting('_front_page_settings.our_services_heading')); ?></h3>
                                </div>
                                <ul>
                                    <?php if(!empty(getMenu('footer', 'Footer menu 3'))): ?>
                                        <?php $__currentLoopData = getMenu('footer', 'Footer menu 3'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if (isset($component)) { $__componentOriginalce95f69c1ef890487f9ea684119db87d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce95f69c1ef890487f9ea684119db87d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menu-item','data' => ['menu' => $item]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['menu' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce95f69c1ef890487f9ea684119db87d)): ?>
<?php $attributes = $__attributesOriginalce95f69c1ef890487f9ea684119db87d; ?>
<?php unset($__attributesOriginalce95f69c1ef890487f9ea684119db87d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce95f69c1ef890487f9ea684119db87d)): ?>
<?php $component = $__componentOriginalce95f69c1ef890487f9ea684119db87d; ?>
<?php unset($__componentOriginalce95f69c1ef890487f9ea684119db87d); ?>
<?php endif; ?> 
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </ul>
                            </nav>
                            <nav class="am-fnavigation">
                               <div class="am-fnavigation_title">
                                    <h3><?php echo e(setting('_front_page_settings.one_on_one_sessions_heading')); ?></h3>
                                </div>
                                <ul>
                                    <?php if(!empty(getMenu('footer', 'Footer menu 4'))): ?>
                                        <?php $__currentLoopData = getMenu('footer', 'Footer menu 4'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if (isset($component)) { $__componentOriginalce95f69c1ef890487f9ea684119db87d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce95f69c1ef890487f9ea684119db87d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menu-item','data' => ['menu' => $item]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['menu' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce95f69c1ef890487f9ea684119db87d)): ?>
<?php $attributes = $__attributesOriginalce95f69c1ef890487f9ea684119db87d; ?>
<?php unset($__attributesOriginalce95f69c1ef890487f9ea684119db87d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce95f69c1ef890487f9ea684119db87d)): ?>
<?php $component = $__componentOriginalce95f69c1ef890487f9ea684119db87d; ?>
<?php unset($__componentOriginalce95f69c1ef890487f9ea684119db87d); ?>
<?php endif; ?> 
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </ul>
                            </nav>
                            <nav class="am-fnavigation">
                               <div class="am-fnavigation_title">
                                    <h3><?php echo e(setting('_front_page_settings.group_sessions_heading')); ?></h3>
                                </div>
                                <ul>
                                    <?php if(!empty(getMenu('footer', 'Footer menu 5'))): ?>
                                        <?php $__currentLoopData = getMenu('footer', 'Footer menu 5'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if (isset($component)) { $__componentOriginalce95f69c1ef890487f9ea684119db87d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce95f69c1ef890487f9ea684119db87d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menu-item','data' => ['menu' => $item]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['menu' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce95f69c1ef890487f9ea684119db87d)): ?>
<?php $attributes = $__attributesOriginalce95f69c1ef890487f9ea684119db87d; ?>
<?php unset($__attributesOriginalce95f69c1ef890487f9ea684119db87d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce95f69c1ef890487f9ea684119db87d)): ?>
<?php $component = $__componentOriginalce95f69c1ef890487f9ea684119db87d; ?>
<?php unset($__componentOriginalce95f69c1ef890487f9ea684119db87d); ?>
<?php endif; ?> 
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </ul>
                            </nav>
                            <?php if(
                            !empty( setting('_front_page_settings.app_section_heading')) ||
                            !empty(setting('_front_page_settings.app_section_description')) ||
                            !empty(setting('_general.android_app_logo')) || !empty(setting('_general.ios_app_logo'))
                            ): ?>
                            <div class="am-fnavigation">
                                <?php if(!empty( setting('_front_page_settings.app_section_heading'))): ?>
                                    <div class="am-fnavigation_title">
                                        <h3><?php echo e(setting('_front_page_settings.app_section_heading')); ?></h3>
                                    </div>
                                <?php endif; ?>
                                <?php if(!empty( setting('_front_page_settings.app_section_description'))): ?>
                                    <p><?php echo e(setting('_front_page_settings.app_section_description')); ?></p>
                                <?php endif; ?>
                                <?php if(
                                    (!empty(setting('_general.ios_app_logo')) && !empty(setting('_front_page_settings.app_ios_link'))) ||
                                    (!empty(setting('_general.android_app_logo')) && !empty(setting('_front_page_settings.app_android_link')))
                                ): ?>
                                    <div class="am-fnavigation_app">
                                        <?php if(!empty(!empty(setting('_general.ios_app_logo'))) && !empty(setting('_front_page_settings.app_ios_link'))): ?>
                                            <a href="<?php echo e(setting('_front_page_settings.app_ios_link')); ?>">
                                                <img src="<?php echo e(url(Storage::url(setting('_general.ios_app_logo')[0]['path']))); ?>" alt="App store image">
                                            </a>
                                        <?php endif; ?>
                                        <?php if(!empty(!empty(setting('_general.android_app_logo'))) && !empty(setting('_front_page_settings.app_android_link'))): ?>
                                            <a href="<?php echo e(setting('_front_page_settings.app_android_link')); ?>">
                                                <img src="<?php echo e(url(Storage::url(setting('_general.android_app_logo')[0]['path']))); ?>" alt="Google play store image">
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="am-footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="am-footer_info">
                            <p>
                                <?php echo e(__('general.copyright_txt',['year' => date('Y')])); ?>

                            </p>
                            <nav>
                                <ul>
                                    <li><a href="<?php echo e(url('terms-condition')); ?>"><?php echo e(__('general.terms_of_use')); ?></a></li>
                                    <li><a href="<?php echo e(url('privacy-policy')); ?>"><?php echo e(__('general.privacy_policy')); ?></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <a class="am-clicktop" href="#"><i class="am-icon-arrow-up"></i></a>
        </div>
    </footer>
<?php else: ?>
    <footer class="am-footer-v4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="am-footer-content">
                        <?php if(!empty(setting('_front_page_settings.footer_heading'))): ?>
                            <h2 data-aos="fade-up"  data-aos-duration="400" data-aos-easing="ease"><?php echo setting('_front_page_settings.footer_heading'); ?></h2>
                        <?php endif; ?>
                        <?php if(!empty(setting('_front_page_settings.footer3_paragraph'))): ?>
                            <p data-aos="fade-up"  data-aos-duration="500" data-aos-easing="ease"><?php echo setting('_front_page_settings.footer3_paragraph'); ?></p>
                        <?php endif; ?>
                        <?php if(!empty(setting('_front_page_settings.primary_button_url')) 
                            || !empty(setting('_front_page_settings.primary_button_text'))
                            || !empty(setting('_front_page_settings.secondary_button_url')) 
                            || !empty(setting('_front_page_settings.secondary_button_text'))): ?>
                            <div class="am-actions" data-aos="fade-up"  data-aos-duration="600" data-aos-easing="ease">
                                <?php if(!empty(setting('_front_page_settings.primary_button_url')) || !empty(setting('_front_page_settings.primary_button_text'))): ?>
                                    <a href="<?php echo setting('_front_page_settings.primary_button_url'); ?>" class="am-getstarted-btn"><?php echo setting('_front_page_settings.primary_button_text'); ?></a>
                                <?php endif; ?>
                                <?php if(!empty(setting('_front_page_settings.secondary_button_url')) || !empty(setting('_front_page_settings.secondary_button_text'))): ?>
                                    <a href="<?php echo setting('_front_page_settings.secondary_button_url'); ?>" class="am-outline-btn"><?php echo setting('_front_page_settings.secondary_button_text'); ?></a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        <?php if(!empty(setting('_front_page_settings.tutor_link_heading')) || !empty(setting('_front_page_settings.join_lernen_link_url')) || !empty(setting('_front_page_settings.join_lernen_link'))): ?>
                            <p class="am-join-lernen" data-aos="fade-up"  data-aos-duration="1000" data-aos-easing="ease"><?php echo setting('_front_page_settings.tutor_link_heading'); ?> <a href="<?php echo setting('_front_page_settings.join_lernen_link_url'); ?>"><?php echo setting('_front_page_settings.join_lernen_link'); ?></a></p>
                        <?php endif; ?>
                        <ul class="am-footer-nav">
                            <li><a href="<?php echo e(url('about-us')); ?>"><?php echo e(__('general.about')); ?></a></li>
                            <li><a href="<?php echo e(url('terms-condition')); ?>"><?php echo e(__('general.terms_of_use')); ?></a></li>
                            <li><a href="<?php echo e(url('privacy-policy')); ?>"><?php echo e(__('general.privacy_policy')); ?></a></li>
                            <li><a href="<?php echo e(url('#')); ?>"><?php echo e(__('general.contact_us')); ?></a></li>
                            <li><a href="<?php echo e(url('faq')); ?>"><?php echo e(__('general.faqs')); ?></a></li>
                            <li><a href="<?php echo e(url('blogs')); ?>"><?php echo e(__('general.blogs')); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php endif; ?>












 











<?php /**PATH C:\Users\Alejandro\Desktop\classgo\resources\views/components/front/footer.blade.php ENDPATH**/ ?>