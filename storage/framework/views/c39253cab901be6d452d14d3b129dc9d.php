<?php if(Session::has('success')): ?>
<div class="pt-3">
    <div class="alert-alert-success">
        <?php echo e(Session::get('success')); ?>

    </div>
</div>
<?php endif; ?>

<?php if($errors->any()): ?>
<div class="pt-3">
    <div class="alert-alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <?php echo e($item); ?>

                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>
    
<?php endif; ?><?php /**PATH C:\xampp\htdocs\CRUD_MBD\resources\views/komponen/pesan.blade.php ENDPATH**/ ?>