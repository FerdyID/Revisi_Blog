<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(asset('css/master.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('font-awesome/css/font-awesome.min.css')); ?>">
    

    
    
    
    
    
</head>
<body>
<header>
    <div class="topnav nav">
        <a class="active" href="/blog">Home</a>
        <a href="/blog/create">Create</a>
        <a href="#">About</a>
        
        
        
            
            
               
                       
                
            
            
            
                
            
        
    </div>
</header>

<div class="content">
    <?php echo $__env->yieldContent('content'); ?>
</div>

<br>
<footer>
    <p class="footer">
        &copy; Laravel & cobaaja 2018
    </p>
</footer>

<script src="<?php echo e(asset('jquery/dist/jquery.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>



    
        
        
            
        
    


</body>
</html>
