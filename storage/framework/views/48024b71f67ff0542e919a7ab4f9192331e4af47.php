<?php $__env->startSection('title', 'Cobain laravel'); ?>

<?php $__env->startSection('content'); ?>
    <br>
    <div class="card content-wrapper">
        <div class="content-article">
            <?php if(session('info')): ?>
                <div class="col-md-5 alert alert-success">
                    <?php echo e(session('info')); ?>

                </div>
            <?php endif; ?>
            
            <div>
                <strong><h3><?php echo e($blog->title); ?></h3></strong>
                <hr>
            </div>
            <div class="card-body">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php echo $blog->description; ?>

                </p>
            </div>
            
            <div class="text-left col-sm">
                <a class="btn btn-primary" href="/blog">Back</a>
                
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>