

<?php $__env->startSection('title', 'Home Page'); ?>

<?php $__env->startSection('content'); ?>
<div class="buttons mt-20">
    <?php if($errors->any()): ?>
        <div>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if(session('error')): ?>
        <div>
            <p><?php echo e(session('error')); ?></p>
        </div>
    <?php endif; ?>
    <form class="align-items-center" action="<?php echo e(route('login.submit')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="d-flex align-items-center justify-content-center">
            <input class="no-border w-100" name="phone" type="text" id="phone" placeholder="Enter Your Phone Number" />
        </div>

        <!-- <a class="action-button mt-5" id="login-button" href="<?php echo e(route('information')); ?>">
            <div class="d-flex">
                <div>
                    Login
                </div>
            </div>
        </a> -->
        <button class="action-button mt-5" type="submit">Login</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chsystem\resources\views/pages/login.blade.php ENDPATH**/ ?>