

<?php $__env->startSection('Title', 'صفحه اصلی'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="/" method="post" id="testForm">
                <div class="input-group mb-3">
                    <input type="text" name="task_title" class="form-control" placeholder="عنوان وظیفه / تسک" aria-label="Example text with button addon" aria-describedby="button-addon1">
                    <button class="btn btn-outline-secondary" type="submit" name="action" value="insert"  id="button-addon1">اضافه کردن</button>
                </div>
            </form>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <ul class="list-group">
                <?php while($row = mysqli_fetch_assoc($todo)): ?>
                    <?php
                        $secondary = $row["done"] ? "list-group-item-secondary" : ""; 
                    ?>
                    <li class='list-group-item ".<?php echo e($secondary); ?>."'> <?php echo e($row['title']); ?>

                        <form method='post' action='/' >
                            <button name='action' value='delete'>DEL</button>
                            
                            <input type='hidden' name='id' value='<?php echo e($row["id"]); ?>' />
                        </form>    
                        <form action='/' method='post'>
                            <input type='hidden' name='action' value='done' />
                            <input type='hidden' name='id' value='<?php echo e($row["id"]); ?>' />
                            <input type='checkbox' value='done' name='done' class='doneCheckBox' ".<?php echo e(($row["done"] ? "checked" : "")); ?>." />
                        </form>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</div>

<script>
    let checkboxes = document.getElementsByClassName("doneCheckBox");
    for(let i=0;i<=checkboxes.length-1; i++){
        checkboxes[i].addEventListener("change",function(e){
            e.target.parentElement.submit();
        })
    }

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("Layout.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\html.project\PHP\MyPhpNew\views/index.blade.php ENDPATH**/ ?>