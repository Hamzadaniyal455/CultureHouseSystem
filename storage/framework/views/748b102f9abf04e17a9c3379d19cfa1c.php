

<?php $__env->startSection('title', 'Home Page'); ?>

<?php $__env->startSection('content'); ?>
<div class="mt-5">
    <h3>Login</h3>
    <div class="steps-indicator mt-5">
        <img src="<?php echo e(asset('images/Steps2.png')); ?>" alt="">
    </div>
    
    <div class="login-info">
        <?php if($visitor): ?>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <p>Visitor Type:</p>
                    <p>Phone Number: </p>
                    <p>Gender: </p>
                </div>
                <div class="col-md-2">
                    <div id="visitor-type-display"><?php echo e($visitor->type); ?></div><br>
                    <div id="phone-number-display"><?php echo e($visitor->phone); ?></div>
                    <div id="gender-display"><?php echo e($visitor->gender); ?></div>
                </div>
                <div class="col-md-4"></div>
            </div>
        <?php else: ?>
            <div class="row">
                <p>No Details Available</p>
            </div>
        <?php endif; ?>
    </div>
   
    <div class="tw-center">
        <a href="<?php echo e(route('dependents')); ?>">
            <button class="action-button-black">Continue Login</button>
        </a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chsystem\resources\views/pages/basic_information.blade.php ENDPATH**/ ?>