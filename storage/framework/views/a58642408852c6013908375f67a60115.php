<!--[if BLOCK]><![endif]--><?php if (! ($breadcrumbs->isEmpty())): ?>
    <ol class="am-breadcrumb">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <!--[if BLOCK]><![endif]--><?php if(!is_null($breadcrumb->url) && !$loop->last): ?>
                <li><a href="<?php echo e($breadcrumb->url); ?>" wire:navigate.remove><?php echo e($breadcrumb->title); ?></a></li>
                <li>
                    <em>/</em>
                </li>
            <?php else: ?>
                <li class="active"><span><?php echo e($breadcrumb->title); ?></span></li>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </ol>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH C:\Users\Alejandro\Desktop\classgo\resources\views/livewire/header/breadcrumbs.blade.php ENDPATH**/ ?>