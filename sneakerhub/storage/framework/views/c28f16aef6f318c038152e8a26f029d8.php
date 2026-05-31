<!DOCTYPE html>
<html>
<head>

<title>SneakerHub</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background: linear-gradient(135deg,#0f2027,#203a43,#2c5364);
    height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    font-family:Arial;
}

.container-box{
    width:900px;
    background:white;
    padding:40px;
    border-radius:15px;
    box-shadow:0px 15px 40px rgba(0,0,0,0.3);
}

.title{
    text-align:center;
    margin-bottom:30px;
    font-weight:bold;
}

.btn-add{
    background:#2b7cff;
    color:white;
}

.btn-add:hover{
    background:#1f5fd6;
}

.table thead{
    background:#222;
    color:white;
}

</style>

</head>

<body>

<div class="container-box">

<h2 class="title">👟 SneakerHub Inventory</h2>

<a href="<?php echo e(route('shoes.create')); ?>" class="btn btn-add mb-3">➕ Add Shoes</a>

<table class="table table-bordered table-hover">

<thead>

<tr>

<th>Name</th>
<th>Brand</th>
<th>Size</th>
<th>Price</th>
<th>Stock</th>
<th>Action</th>

</tr>

</thead>

<tbody>

<?php $__currentLoopData = $shoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shoe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<tr>

<td><?php echo e($shoe->name); ?></td>
<td><?php echo e($shoe->brand); ?></td>
<td><?php echo e($shoe->size); ?></td>
<td>₱ <?php echo e($shoe->price); ?></td>
<td><?php echo e($shoe->stock); ?></td>

<td>

<a href="<?php echo e(route('shoes.edit',$shoe->id)); ?>" class="btn btn-warning btn-sm">Edit</a>

<form action="<?php echo e(route('shoes.destroy',$shoe->id)); ?>" method="POST" style="display:inline">

<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>

<button class="btn btn-danger btn-sm">Delete</button>

</form>

</td>

</tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</tbody>

</table>

</div>

</body>
</html><?php /**PATH C:\Users\User\sneakerhub\resources\views/shoes/index.blade.php ENDPATH**/ ?>