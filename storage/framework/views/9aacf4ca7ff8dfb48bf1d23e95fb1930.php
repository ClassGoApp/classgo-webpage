<main class="tb-main">
    <div class="row justify-content-center">
        <div class="col-xl-9">
            <div class="la-payment-methods">
                <div class="la-adminp-title">
                    <h6><?php echo e(__('admin/general.profile_title')); ?></h6>
                </div>
                <div class="la-admin-profile">
                    <div class="la-admin-imgarea la-image-sec">
                        <!--[if BLOCK]><![endif]--><?php if(!empty($cropImageUrl)): ?>
                            <img src="<?php echo e($cropImageUrl); ?>">
                        <?php elseif(!empty($old_image)): ?>
                            <img src="<?php echo e(url(Storage::url($old_image))); ?>" alt="">
                        <?php else: ?>
                            <img src="<?php echo e(setting('_general.default_avatar_for_user') ? url(Storage::url(setting('_general.default_avatar_for_user')[0]['path'])) : resizedImage('placeholder.png', 132, 132)); ?>" alt="">
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <div class="tb-adminprofo">
                            <h4><?php echo e(__('admin/general.upload_profile_photo')); ?></h4>
                            <p><?php echo e(__('admin/general.profile_image_size_err', ['file_size' => $allowImageSize . 'MB', 'file_types' => implode(', ', $allowImageExt)])); ?></p>
                            <div wire:ignore class="la-delete-img">
                                <input id="upload_image" type="file" accept="<?php echo e(join(',', array_map(function($ext){return('.'.$ext);},$allowImageExt))); ?>" >
                                <label for="upload_image"><?php echo e(__('admin/general.upload_photo')); ?></label>
                                <a href="javascript:void(0)" wire:click.prevent="removePhoto" ><i class="icon-trash-2 lb-trash"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="la-admin-infomation">
                        <form class="la-themeform">
                            <div class="form-group-wrap">
                                <div class="form-group form-group-3half">
                                    <label class="la-titleinput"><?php echo e(__('admin/general.first_name')); ?></label>
                                    <input type="text" wire:model.defer="first_name" class="form-control <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> lb-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e(__('admin/general.name_placeholder')); ?>">
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="lb-errormsg">
                                            <span><?php echo e($message); ?></span>
                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                </div>
                                <div class="form-group form-group-3half">
                                    <label class="la-titleinput"><?php echo e(__('admin/general.last_name')); ?></label>
                                    <input type="text" wire:model.defer="last_name" class="form-control <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> lb-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e(__('admin/general.lastname_placeholder')); ?>">
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="lb-errormsg">
                                            <span><?php echo e($message); ?></span>
                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                </div>
                                <div class="form-group form-group-3half ">
                                    <label class="la-titleinput"><?php echo e(__('admin/general.email')); ?></label>
                                    <input type="email" wire:model.defer="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> lb-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e(__('admin/general.email_placeholder')); ?>">
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="lb-errormsg">
                                            <span><?php echo e($message); ?></span>
                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                </div>
                                <div class="form-group form-group-3half ">
                                    <label class="la-titleinput"><?php echo e(__('admin/general.current_password')); ?></label>
                                    <input type="password" wire:model.defer="current_password" class="form-control <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> lb-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e(__('admin/general.current_password_placeholder')); ?>">
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="lb-errormsg">
                                            <span><?php echo e($message); ?></span>
                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                </div>
                                <div class="form-group form-group-3half ">
                                    <label class="la-titleinput"><?php echo e(__('admin/general.password')); ?></label>
                                    <input type="password" wire:model.defer="new_password" class="form-control <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> lb-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e(__('admin/general.password_placeholder')); ?>">
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="lb-errormsg">
                                            <span><?php echo e($message); ?></span>
                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                </div>
                                <div class="form-group form-group-3half ">
                                    <label class="la-titleinput"><?php echo e(__('admin/general.confirm_password')); ?></label>
                                    <input type="password" wire:model.defer="confirm_password" class="form-control <?php $__errorArgs = ['confirm_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> lb-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e(__('admin/general.confirm_password')); ?>">
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['confirm_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="lb-errormsg">
                                            <span><?php echo e($message); ?></span>
                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                </div>
                                <div class="form-group">
                                    <div class="la-updatesave-btn">
                                        <a href="javascript:void(0);" wire:click.prevent="update" class="la-btn-lg"><?php echo e(__('admin/general.setting_save')); ?></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div wire:ignore.self class="modal fade lb-uploadprofile" id="la_phrofile_photo" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered lb-modaldialog" role="document">
                <div class="modal-content">
                    <div class="lb-popuptitle">
                        <h4> <?php echo e(__('admin/general.crop_profile_photo')); ?> </h4>
                        <a href="javascript:void(0);" class="close"><i class="icon-x" data-bs-dismiss="modal"></i></a>
                    </div>
                    <div class="modal-body" id="tk_add_education_frm">
                        <div id="crop_img_area">
                            <div class="preloader-outer">
                                <div class="lb-preloader">
                                    <img class="fa-spin" src="<?php echo e(asset('images/loader.png')); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="lb-form-btn">
                            <div class="lb-savebtn lb-dhbbtnarea ">
                                <a href="javascript:void(0);" id="croppedImage" class="tb-btn"><?php echo e(__('admin/general.save_update')); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade lb-addonpopup" id="la_phrofile_photo" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered lb-modaldialog" role="document">
            <div class="modal-content">
                <div class="lb-popuptitle">
                    <h4> <?php echo e(__('admin/general.crop_profile_photo')); ?> </h4>
                    <a href="javascript:void(0);" class="close"><i class="icon-x" data-bs-dismiss="modal"></i></a>
                </div>
                <div class="modal-body" id="tk_add_education_frm">
                    <div id="crop_img_area">
                        <div class="preloader-outer">
                            <div class="lb-preloader">
                                <img class="fa-spin" src="<?php echo e(asset('images/loader.png')); ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $__env->startPush('styles'); ?>
    <?php echo app('Illuminate\Foundation\Vite')([
        'public/css/croppie.css',
    ]); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
<script defer src="<?php echo e(asset('js/croppie.min.js')); ?>"></script>
<script>
    var image_crop = '';
    $(document).on("change", "#upload_image", function(e) {
        var files = e.target.files;

        let fileExt = files[0].name.split('.').pop();
        fileExt = fileExt ? fileExt.toLowerCase() : '';
        let fileSize = files[0].size / 1024;
        let allowFileSize = Number("<?php echo e($allowImageSize); ?>") * 1024;
        let allowFileExt = `${<?php echo !empty($allowImageExt) ? json_encode($allowImageExt) : ''; ?>}`;
        allowFileExt = allowFileExt.split(',');

        if (allowFileExt.includes(fileExt) && fileSize <= allowFileSize) {

            $('#la_phrofile_photo').modal('show');
                jQuery('#la_phrofile_photo .modal-body .preloader-outer').css({
                    display: 'block',
                    position: 'absolute',
                    background: 'rgb(255 255 255 / 98%)'
                });

                var reader, file, url;

                if (!image_crop) {
                    image_crop = jQuery('#crop_img_area').croppie({
                        viewport: {
                            width: 300,
                            height: 300,
                            type: 'square'
                        },
                        boundary: {
                            width: 500,
                            height: 300
                        }
                    });
                }

                if (files && files.length > 0) {
                    file = files[0];
                    var reader = new FileReader();

                    reader.onload = e => {
                        setTimeout(() => {
                            image_crop.croppie('bind', {
                                url: e.target.result
                            });
                            setTimeout(() => {
                                jQuery('#la_phrofile_photo .modal-body .preloader-outer').css({
                                    display: 'none'
                                });
                            }, 100);

                        }, 500);

                    }
                    reader.readAsDataURL(file);
                }
            } else {
                let error_message = '';
                if (!allowFileExt.includes(fileExt)) {
                    error_message = "<?php echo e(__('general.invalid_file_type', ['file_types' => join(', ', array_map(function($ext){return('.'.$ext);},$allowImageExt)) ])); ?>";
                } else if (fileSize >= allowFileSize) {
                    error_message = "<?php echo e(__('general.max_file_size_err', [ 'file_size' => $allowImageSize.'MB' ])); ?>";
                }
                showAlert({
                    message: error_message,
                    type: 'error',
                    title: "<?php echo e(__('general.error_title')); ?>",
                    autoclose: 1000,
                    redirectUrl: ''
                });
            }
            e.target.value = '';
        });
        $(document).on("click", "#croppedImage", function(e) {
            image_crop.croppie('result', {
                type: 'base64',
                format: 'jpg'
            }).then(function(base64) {
                window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('cropImageUrl', base64);
            });

            jQuery('#la_phrofile_photo').modal('hide');
        });
</script>
<?php $__env->stopPush(); ?><?php /**PATH /home/vzofynbp/classgoapp.com/resources/views/livewire/pages/admin/profile/profile.blade.php ENDPATH**/ ?>