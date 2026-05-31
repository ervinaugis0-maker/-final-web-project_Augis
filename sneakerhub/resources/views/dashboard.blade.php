<!DOCTYPE html>
<html>
<head>

<title>SneakerHub</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:linear-gradient(135deg,#0f2027,#203a43,#2c5364);
height:100vh;
display:flex;
align-items:center;
justify-content:center;
font-family:Arial;
color:white;
}

.dashboard{
text-align:center;
}

.cards{
margin-top:40px;
display:flex;
gap:40px;
justify-content:center;
}

.card-box{
width:260px;
padding:40px;
border-radius:20px;
color:white;
text-decoration:none;
transition:0.3s;
}

.card-box:hover{
transform:scale(1.05);
}

.blue{
background:#2b7cff;
}

.green{
background:#28a745;
}

.icon{
font-size:60px;
margin-bottom:15px;
}

</style>

</head>

<body>

<div class="dashboard">

<h1>👟 SneakerHub System</h1>

<div class="cards">

<a href="/shoes/create" class="card-box blue">

<div class="icon">➕</div>

<h3>Add Shoes</h3>

<p>Create new shoe product</p>

</a>

<a href="/shoes" class="card-box green">

<div class="icon">📋</div>

<h3>Shoes List</h3>

<p>View / Edit / Delete shoes</p>

</a>

</div>

</div>

</body>
</html>