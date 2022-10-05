<link rel="stylesheet" href="<?php echo e(asset('assets/css/store.css')); ?>">


<?php $__env->startSection('content'); ?>

<!--
<div class="card text-center">
    <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
                <a class="nav-link active" href="">New Task</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Active Tasks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Category</a>
            </li>
        </ul>
    </div>
</div>
-->
<div class="all-task">
    <div class="a-task">
        <h1>All tasks</h1>
        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="task">
                <div class="tasks">
                    <a href="<?php echo e(route('taza.task.edit', [ 'id' => $task->id ])); ?>"><?php echo e($task->name); ?></a>
                </div>
                <form action="<?php echo e(route('taza.task.destroy', $task)); ?>" method="POST">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="tasks">
                        <button class="btn" type="submit">Delete Task</button>
                    </div>
                </form>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tazas\resources\views/taza/task/index.blade.php ENDPATH**/ ?>