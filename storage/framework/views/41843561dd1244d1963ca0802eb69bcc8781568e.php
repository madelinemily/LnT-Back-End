
<?php $__env->startSection('title','View Department'); ?>
<?php $__env->startSection('content'); ?>
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        View Department
        <a href="<?php echo e(url('depart')); ?>" class="float-end btn btn-sm btn-success">View All</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Title</th>
                <td>
                <?php echo e($data->title); ?>

                </td>
            </tr>
        </table>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel-apps\employeeRecord\resources\views/department/show.blade.php ENDPATH**/ ?>