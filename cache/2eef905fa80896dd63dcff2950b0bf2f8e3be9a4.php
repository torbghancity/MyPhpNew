

<?php $__env->startSection('Title', 'ایجاد حساب'); ?>

<?php $__env->startSection('content'); ?>

<form action="/register" method="post">
    <input type="hidden" name="action" value="register">
    
    نام: <input type="text" name="name" >
    <br>
    <br>
    نام کاربری: <input type="text" name="username" >
    <br>
    <br>
    رمز عبور: <input type="password" name="password">
    <br>
    <br>
    تگرار رمز عبور: <input type="password" name="password_repeat">
    <br>
    <br>
    <button>ایجاد حساب</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("Layout.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\html.project\PHP\MyPhpNew\views/register.blade.php ENDPATH**/ ?>