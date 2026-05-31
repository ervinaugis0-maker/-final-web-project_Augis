<!DOCTYPE html>
<html>
<head>
<title>Add Shoes</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<h2>Add New Shoes</h2>

<form action="<?php echo e(route('shoes.store')); ?>" method="POST">

<?php echo csrf_field(); ?>

<div class="mb-3">
<label>Name</label>
<input type="text" name="name" class="form-control">
</div>

<div class="mb-3">
<label>Brand</label>
<input type="text" name="brand" class="form-control">
</div>

<div class="mb-3">
<label>Size</label>
<input type="number" name="size" class="form-control">
</div>

<div class="mb-3">
<label>Price</label>
<input type="text" name="price" class="form-control">
</div>

<div class="mb-3">
<label>Stock</label>
<input type="number" name="stock" class="form-control">
</div>

<button class="btn btn-success">Save</button>

</form>

</div>

</body>
</html><?php /**PATH C:\Users\User\sneakerhub\resources\views/shoes/create.blade.php ENDPATH**/ ?>