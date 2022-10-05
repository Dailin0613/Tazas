<link rel="stylesheet" href="<?php echo e(asset('assets/css/task.css')); ?>">

<?php $__env->startSection('content'); ?>

<div class="card text-center">
    <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
                <a class="nav-link active" href="#">All Tasks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Active Tasks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">New Task</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Category</a>
            </li>
        </ul>
    </div>
</div>
<div class="container">
    <div class="all-container">
        <form action="<?php echo e(route('taza.task.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <h2>Make your Task</h2>
            <div class="input-box">
                <span>Write a task</span>
                <div class="box">
                    <input type="text" name="name" id="name" required>
                </div>
            </div>
            <div class="input-box">
                <div class="box">
                    <input type="submit" value="Create a new task">
                </div>
            </div>
            <div class="msg">
            <?php if(session('success')): ?>
                <h5 class="alert alert-success"><?php echo e((session('success'))); ?></h5>
            <?php endif; ?>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tazas\resources\views/taza/task/a-task.blade.php ENDPATH**/ ?>