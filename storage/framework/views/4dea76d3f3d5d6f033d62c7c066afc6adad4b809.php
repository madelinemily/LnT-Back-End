
<?php $__env->startSection('title','Add Employee'); ?>
<?php $__env->startSection('content'); ?>
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Create Employee
        <a href="<?php echo e(url('employee')); ?>" class="float-end btn btn-sm btn-success">View All</a>
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
        <form method="post" action="<?php echo e(url('employee')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <table class="table table-bordered">
            <tr>
                    <th>Department</th>
                    <td>
                    <select name="depart" class="form-control">
                            <option value="">--Select Department--</option>
                            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $depart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($depart->id); ?>"><?php echo e($depart->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Full Name</th>
                    <td>
                        <input type="text" name="full_name" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>
                        <input type="text" name="address" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>Mobile</th>
                    <td>
                        <input type="text" name="mobile" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        <input type="radio" name="status" value="1"  /> Activate 
                        <br />
                        <input type="radio" checked="checked" name="status" value="0" /> DeActivate
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel-apps\employeeRecord\resources\views/employee/create.blade.php ENDPATH**/ ?>