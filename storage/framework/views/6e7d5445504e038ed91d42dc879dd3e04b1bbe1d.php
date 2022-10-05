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
<div class="mb-3">
    <label for="exampleInputText1" class="form-label">Some text</label>
    <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp">
    <div id="textHelp" class="form-text">We'll never share your texts with anyone else.</div>
</div>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tazas\resources\views/taza/task.blade.php ENDPATH**/ ?>