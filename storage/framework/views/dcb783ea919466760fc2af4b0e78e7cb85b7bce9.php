<?php $__env->startSection('content'); ?>
<a href="subscriptions/create" class="btn btn-primary">Register</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">State</th>
            <th scope="col">Email</th>
            <th scope="col">Creation Date</th>
            <th scope="col">Update Date</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $subscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($subscription->id); ?></td>
            <td><?php echo e($subscription->name_state); ?></td>
            <td><?php echo e($subscription->email); ?></td>
            <td><?php echo e($subscription->created_at); ?></td>
            <td><?php echo e($subscription->updated_at); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.templatemain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marina/Documentos/bekeu/resources/views/subscription/index.blade.php ENDPATH**/ ?>