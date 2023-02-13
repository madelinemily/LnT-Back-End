
<?php $__env->startSection('title','All Employees'); ?>
<?php $__env->startSection('content'); ?>
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        All Employees
        <a href="<?php echo e(url('employee/create')); ?>" class="float-end btn btn-sm btn-success">Add New</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple" class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Department</th>
                    <th>Full</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <!-- <tfoot>
                <tr>
                    <th>#</th>
                    <th>Department</th>
                    <th>Full</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </tfoot> -->
            <tbody>
                <?php if($data): ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($d->id); ?></td>
                    <td><?php echo e($d->department_id); ?></td>
                    <td><?php echo e($d->full_name); ?></td>
                    <td><?php echo e($d->address); ?></td>
                    <td>
                    <a href="<?php echo e(url('depart/'.$d->id)); ?>" class="btn btn-warning btn-sm">Show</a>
                        <a href="<?php echo e(url('depart/'.$d->id.'/edit')); ?>" class="btn btn-info btn-sm">Update</a>
                        <a onclick="return confirm('Are you sure to delete this data?')" href="<?php echo e(url('depart/'.$d->id.'/delete')); ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?php echo e(asset('public')); ?>/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="<?php echo e(asset('public')); ?>/js/datatables-simple-demo.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel-apps\employeeRecord\resources\views/employee/index.blade.php ENDPATH**/ ?>