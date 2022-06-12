

<?php $__env->startSection('Title', 'ورود'); ?>

<?php $__env->startSection('content'); ?>

<form action="/login" method="post">
    <input type="hidden" name="action" value="login">
    
    نام کاربری: <input type="text" name="username" >
    <br>
    <br>
    رمز عبور: <input type="password" name="password">
    <br>
    <br>
    <button>ورود</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("Layout.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\html.project\PHP\MyPhpNew\views/login.blade.php ENDPATH**/ ?>