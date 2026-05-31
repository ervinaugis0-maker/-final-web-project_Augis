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

<a href="{{ route('shoes.create') }}" class="btn btn-add mb-3">➕ Add Shoes</a>

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

@foreach($shoes as $shoe)

<tr>

<td>{{ $shoe->name }}</td>
<td>{{ $shoe->brand }}</td>
<td>{{ $shoe->size }}</td>
<td>₱ {{ $shoe->price }}</td>
<td>{{ $shoe->stock }}</td>

<td>

<a href="{{ route('shoes.edit',$shoe->id) }}" class="btn btn-warning btn-sm">Edit</a>

<form action="{{ route('shoes.destroy',$shoe->id) }}" method="POST" style="display:inline">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm">Delete</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</body>
</html>