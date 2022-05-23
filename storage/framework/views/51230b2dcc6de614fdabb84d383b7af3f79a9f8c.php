<?php $__env->startSection('content'); ?>
<h2>Register</h2>

<form action="/subscriptions" method="POST">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input id="email" name="email" type="email" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">State</label>
    
        <select id="name_state" name="name_state"  class="form-select" aria-label="Select your State">
        <option selected>Select your State</option>
        <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value=<?php echo e($state->name); ?>><?php echo e($state->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
        </select>
    </div>
    <a href="/subscriptions" class="btn btn-secondary" tabindex="5">Cancel</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Save</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.templatemain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marina/Documentos/bekeu/resources/views/subscription/create.blade.php ENDPATH**/ ?>