<?php
use Services\Auth\Auth;
?>

<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('Title'); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
</head> 
<body>
    

<div class="container">
    <ul class="nav">
    <li class="nav-item">
        <a class="nav-link" href="/">صفحه اصلی</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/about">درباره ما</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/contact">تماس با ما</a>
    </li>
    <?php
    
        if ($userData = Auth::user()) {
            ?>
    <li class="nav-item">
      <?php echo e($userData["username"]); ?>

    </li>
    <li class="nav-item">
        <a class="nav-link" href="/logout">خروج</a>
    </li>
    <?php
        } else {
            ?>
            
    <li class="nav-item">
        <a class="nav-link" href="/login">ورود</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/register">ایجاد حساب</a>
    </li>
    <?php
        }
        ?>
    </ul>


<h1 class='h3'>پروژه تودولیست</h1>
<h2 class='h4'>عنوان صفحه:<span style="color:red"> <?php echo $__env->yieldContent('Title'); ?> </span></h2>



<hr>


</div>

<?php echo $__env->yieldContent('content'); ?>


<hr>



<h4>فوتر صفحه</h4>


</body>
</html><?php /**PATH D:\html.project\PHP\MyPhpNew\views/Layout/app.blade.php ENDPATH**/ ?>