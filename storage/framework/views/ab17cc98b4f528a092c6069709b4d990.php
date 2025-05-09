<div class="am-blogs_main">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--[if BLOCK]><![endif]--><?php if(!empty(setting('_front_page_settings.blog_pre_heading')) 
                        || !empty(setting('_front_page_settings.blog_heading')) 
                        || !empty(setting('_front_page_settings.blog_description'))
                        || !empty(setting('_front_page_settings.search_placeholder'))
                        || !empty(setting('_front_page_settings.search_button_text'))): ?>
                        <section class="am-works am-blogs"> 
                            <div class="am-page-title-wrap">
                                <div class="am-content_box">
                                    <?php if(!empty(setting('_front_page_settings.blog_pre_heading'))): ?>
                                        <span><?php echo setting('_front_page_settings.blog_pre_heading'); ?></span>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <!--[if BLOCK]><![endif]--><?php if(!empty(setting('_front_page_settings.blog_heading'))): ?>
                                        <h3><?php echo setting('_front_page_settings.blog_heading'); ?></h3>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <!--[if BLOCK]><![endif]--><?php if(!empty(setting('_front_page_settings.blog_description'))): ?>
                                        <p><?php echo setting('_front_page_settings.blog_description'); ?></p>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <form class="am-learning_search">
                                        <!--[if BLOCK]><![endif]--><?php if(!empty(setting('_front_page_settings.search_placeholder'))): ?>
                                            <div class="am-learning_search_input">
                                                <input wire:model.live.debounce.500ms="keyword" type="text" placeholder="<?php echo setting('_front_page_settings.search_placeholder'); ?>">
                                                <i class="am-icon-search-02"></i>
                                            </div>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        <!--[if BLOCK]><![endif]--><?php if(!empty(setting('_front_page_settings.search_button_text'))): ?>
                                            <button class="am-learning_search_btn am-btn am-disabled"><?php echo setting('_front_page_settings.search_button_text'); ?></button>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    </form>
                                </div>
                            </div>
                        </section>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        </div>
    </section>
    <section class="am-allblogs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="am-allblogs_wrap am-blogs-main">
                        <!--[if BLOCK]><![endif]--><?php if(!empty(setting('_front_page_settings.all_blogs_heading'))): ?>
                            <h2><?php echo setting('_front_page_settings.all_blogs_heading'); ?></h2>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <div class="am-blogs-select-main">
                            <!--[if BLOCK]><![endif]--><?php if($keyword || $category_id || $orderBy != 'desc'): ?>
                                <div class="am-clear-filter" wire:click='clearFilters'>
                                    <span><?php echo e(__('blogs.clear_all_filtes')); ?> <i class="am-icon-multiply-02"></i></span>
                                </div>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            <div class="am-blogs-select">
                                <span class="am-select" wire:ignore>
                                    <select class="am-select2" id="category_id" data-searchable="true"
                                        data-class="am-sort_dp_option" data-placeholder="<?php echo e(__('blogs.select_category')); ?>"> 
                                        <option value=""><?php echo e(__('blogs.select_category')); ?></option>
                                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php echo e($category_id == $category->id ? 'selected' : ''); ?> value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                    </select>
                                </span>
                            </div>
                            <div class="am-blogs-select">
                                <span class="am-select" wire:ignore>
                                    <select class="am-select2" id="sort_by" data-searchable="false"
                                        data-class="am-sort_dp_option" data-placeholder="<?php echo e(__('blogs.sort_by')); ?>">
                                        <option value=""><?php echo e(__('blogs.sort_by')); ?></option>
                                        <option value="asc" <?php echo e(request()->sort_by == 'asc' ? 'selected' : ''); ?>><?php echo e(__('blogs.oldest_first')); ?></option>
                                        <option value="desc" <?php echo e(request()->sort_by == 'desc' ? 'selected' : ''); ?>><?php echo e(__('blogs.newest_first')); ?></option>
                                    </select>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <!--[if BLOCK]><![endif]--><?php if($blogs->isNotEmpty()): ?>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6 col-xs-12">
                            <div class="am-allblogs_items am-blog-items">
                                <figure>
                                    <!--[if BLOCK]><![endif]--><?php if(!empty($blog->image) && Storage::disk(getStorageDisk())->exists($blog->image)): ?>
                                        <img src="<?php echo e(resizedImage($blog->image, 416, 290)); ?>" alt="<?php echo e($blog->title); ?>">
                                    <?php else: ?>
                                        <img src="<?php echo e(Storage::disk(getStorageDisk())->exists('blog-default.png') ? url(Storage::url('blog-default.png')) : asset('demo-content/placeholders/blog-default.png')); ?>" alt="<?php echo e($blog->title); ?>">
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </figure>
                                <div class="am-allblogs_items_content">
                                    <div class="am-allblogs_items_content_date">
                                        <div class="am-blog-categories-content">
                                            <!--[if BLOCK]><![endif]--><?php if(!empty($blog->categories)): ?>
                                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $blog->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <em><?php echo e($category?->name); ?><?php echo e($key < count($blog->categories) - 1 ? ',' : ''); ?></em>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->        
                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        </div>
                                        <span><?php echo e($blog->updated_at->format('d M Y')); ?></span>
                                    </div>
                                    <div class="am-allblogs_items_content_title">
                                        <div class="am-blogs-check">
                                            <a target="_blank" href="<?php echo e(route('blog-details', $blog->slug)); ?>">
                                                <h4><?php echo e($blog->title); ?></h4>
                                            </a>
                                            <a target="_blank" href="<?php echo e(route('blog-details', $blog->slug)); ?>">
                                                <span><i class="am-icon-arrow-top-right"></i></span>
                                            </a>    
                                        </div>
                                    </div>
                                    <?php
                                        $description = strip_tags($blog->description);
                                        $shortDescription = Str::words($description, 50, '...');
                                    ?>
                                    <p><?php echo e($shortDescription); ?></p>
                                    <!--[if BLOCK]><![endif]--><?php if(!empty($blog->tags)): ?>
                                        <ul class="am-allblogs_items_content_tags">
                                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $blog->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><span><?php echo e($tag->name); ?></span></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                        </ul>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                <?php else: ?>
                    <div class="row">
                        <div class="am-blog-result">
                            <em><svg xmlns="http://www.w3.org/2000/svg" width="44" height="59" viewBox="0 0 44 59" fill="none">
                                    <path d="M37.3999 15.2007C39.8299 15.2007 41.7998 17.1706 41.7998 19.6007V48.2C41.7998 53.0601 37.86 56.9999 33 56.9999H11.0001C6.14004 56.9999 2.2002 53.06 2.2002 48.2V10.8009C2.2002 5.94082 6.14003 2.00098 11.0001 2.00098H24.2C26.63 2.00098 28.6 3.9709 28.6 6.40091V10.8008C28.6 13.2308 30.5699 15.2007 32.9999 15.2007H37.3999Z" stroke="#EAEAEA" stroke-width="3.29995" stroke-miterlimit="10"/>
                                    <path d="M21.5108 2H25.0236C27.3137 2 29.5136 2.89274 31.156 4.48862L39.1271 12.2338C40.8325 13.8908 41.7947 16.1674 41.7947 18.5451V26.2655" stroke="#EAEAEA" stroke-width="3.29995" stroke-miterlimit="10"/>
                                    <path d="M20.3476 43.7978C26.7265 43.7978 31.8975 38.6268 31.8975 32.248C31.8975 25.8693 26.7265 20.6982 20.3476 20.6982C13.9688 20.6982 8.79774 25.8693 8.79774 32.248C8.79774 38.6268 13.9688 43.7978 20.3476 43.7978Z" stroke="#EAEAEA" stroke-width="2.47496" stroke-miterlimit="10"/>
                                    <path d="M18.5666 30.8638C18.0822 31.6924 17.1825 32.2521 16.1584 32.2521C15.1249 32.2521 14.2284 31.6924 13.7471 30.8638" stroke="#EAEAEA" stroke-width="2.09005" stroke-miterlimit="10" stroke-linecap="round"/>
                                    <path d="M26.95 30.8638C26.4669 31.6972 25.5644 32.2609 24.5366 32.2609C23.4995 32.2609 22.6002 31.6972 22.1202 30.8638" stroke="#EAEAEA" stroke-width="2.09005" stroke-miterlimit="10" stroke-linecap="round"/>
                                    <path d="M20.3917 36.9302H20.4045" stroke="#EAEAEA" stroke-width="2.78674" stroke-linecap="round"/>
                                    <path d="M35.1916 47.0968L31.8916 43.7969" stroke="#EAEAEA" stroke-width="2.47496" stroke-miterlimit="10" stroke-linecap="round"/>
                                </svg>
                            </em>
                            <h4><?php echo e(__('blogs.no_results_found')); ?></h4>
                            <span><?php echo e(__('blogs.no_results_found_description')); ?></span>
                        </div>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                
                <!--[if BLOCK]><![endif]--><?php if($blogs->hasPages() && $blogs->isNotEmpty()): ?>
                    <div class="col-12">
                        <?php echo e($blogs->links('pagination.pagination', ['blog' => true])); ?>

                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </section>
</div>

<?php $__env->startPush('scripts'); ?>

<script>
    document.addEventListener('livewire:navigated', function() {

        component = window.Livewire.find('<?php echo e($_instance->getId()); ?>');

        jQuery('.am-select2').each((index, item) => {
            let _this = jQuery(item);
            searchable = _this.data('searchable');
            let params = {
                dropdownCssClass: _this.data('class'),
                placeholder: _this.data('placeholder'),
                allowClear: true
            }
            if(!searchable){
                params['minimumResultsForSearch'] = Infinity;
            }
            _this.select2(params);
        });

        jQuery(document).on('change', '#sort_by', function (e){
            let value = $('#sort_by').select2("val");
            component.set('orderBy', value);
        });

        jQuery(document).on('change', '#per_page', function (e){
            let value = $('#per_page').select2("val");
            component.set('perPage', value);
        });

        jQuery(document).on('change', '#category_id', function (e){
            let value = $('#category_id').select2("val");
            component.set('category_id', value);
        });

        component.on('clear_filters', function() {
            $('#sort_by').val('desc').trigger('change');
            $('#per_page').val(null).trigger('change');
            $('#category_id').val(null).trigger('change');
        });
    });
</script>
<?php $__env->stopPush(); ?><?php /**PATH /home/vzofynbp/classgoapp.com/resources/views/livewire/pages/blogs.blade.php ENDPATH**/ ?>