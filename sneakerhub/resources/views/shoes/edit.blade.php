<!DOCTYPE html>
<html>
<head>
<title>Edit Shoes</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<h2>Edit Shoes</h2>

<form action="{{ route('shoes.update',$shoe->id) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
<label>Name</label>
<input type="text" name="name" value="{{ $shoe->name }}" class="form-control">
</div>

<div class="mb-3">
<label>Brand</label>
<input type="text" name="brand" value="{{ $shoe->brand }}" class="form-control">
</div>

<div class="mb-3">
<label>Size</label>
<input type="number" name="size" value="{{ $shoe->size }}" class="form-control">
</div>

<div class="mb-3">
<label>Price</label>
<input type="text" name="price" value="{{ $shoe->price }}" class="form-control">
</div>

<div class="mb-3">
<label>Stock</label>
<input type="number" name="stock" value="{{ $shoe->stock }}" class="form-control">
</div>

<button class="btn btn-primary">Update</button>

</form>

</div>

</body>
</html>