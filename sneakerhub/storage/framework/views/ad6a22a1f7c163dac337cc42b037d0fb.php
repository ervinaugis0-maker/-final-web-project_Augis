<!DOCTYPE html>
<html>
<head>
<title>Edit Shoes</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<h2>Edit Shoes</h2>

<form action="<?php echo e(route('shoes.update',$shoe->id)); ?>" method="POST">

<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>

<div class="mb-3">
<label>Name</label>
<input type="text" name="name" value="<?php echo e($shoe->name); ?>" class="form-control">
</div>

<div class="mb-3">
<label>Brand</label>
<input type="text" name="brand" value="<?php echo e($shoe->brand); ?>" class="form-control">
</div>

<div class="mb-3">
<label>Size</label>
<input type="number" name="size" value="<?php echo e($shoe->size); ?>" class="form-control">
</div>

<div class="mb-3">
<label>Price</label>
<input type="text" name="price" value="<?php echo e($shoe->price); ?>" class="form-control">
</div>

<div class="mb-3">
<label>Stock</label>
<input type="number" name="stock" value="<?php echo e($shoe->stock); ?>" class="form-control">
</div>

<button class="btn btn-primary">Update</button>

</form>

</div>

</body>
</html><?php /**PATH C:\Users\User\sneakerhub\resources\views/shoes/edit.blade.php ENDPATH**/ ?>