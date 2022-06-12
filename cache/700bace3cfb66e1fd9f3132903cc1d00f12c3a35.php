

<?php $__env->startSection('Title', 'تماس با ما'); ?>

<?php $__env->startSection('content'); ?>

<form action="/contact" method="post">
        <input type="hidden" name="action" value="insert">
        <textarea name="text" id="text" cols="30" rows="10"></textarea>
        <br>
        <input type="text" name="sender" >
        <br>
        <button type="submit">ارسال</button>
    </form>
    
<table border="1" width="100%">
    <thead>
        <tr>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = mysqli_fetch_assoc($messages)): ?>
            <tr>
                <td><?php echo e($row["sender"]); ?></td>
                <td><?php echo e($row["text"]); ?></td>
            </tr>
        <?php endwhile; ?>    
    </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("Layout.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\html.project\PHP\MyPhpNew\views/contact.blade.php ENDPATH**/ ?>