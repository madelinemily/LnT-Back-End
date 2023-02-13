
<?php $__env->startSection('title','All Departments'); ?>
<?php $__env->startSection('content'); ?>
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Create Department
        <a href="<?php echo e(url('depart')); ?>" class="float-end btn btn-sm btn-success">View All</a>
    </div>
    <div class="card-body">

    <?php if($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p class="text-danger"><?php echo e($error); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

        <?php if(Session::has('msg')): ?>
        <p class="text-success"><?php echo e(session('msg')); ?></p>
        <?php endif; ?>
        <form method="post" action="<?php echo e(url('depart')); ?>">
            <?php echo csrf_field(); ?>
            <table class="table table-bordered">
                <tr>
                    <th>Title</th>
                    <td>
                        <input type="text" name="title" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" class="btn btn-primary" value="Submit" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel-apps\employeeRecord\resources\views/department/create.blade.php ENDPATH**/ ?>