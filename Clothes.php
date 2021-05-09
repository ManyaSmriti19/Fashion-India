<html>
<head>
<title> FI </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.c
ss"
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJ
lSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="home.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/5.9.0/css/all.css">
<style>
#base
{
width:100%;
}
t
{
font-size: 20px;
}
.sp
{
padding: 20px;
width:100%;
text-align: center;
border-radius:20px;
}
.sp:link
{
text-decoration: none;
}
a:link
{
text-decoration: none;
color: black;
}
.sp:hover
{
opacity:0.95;
}
img
{
width:50%;
margin:30px;
}
div.img
{
position:relative;
width:100%;
text-align: center;
}
p
{
font-size:20px;
font-family: palatino;
}
td
{
width:50%;
}
.text
{
height:30px;
width:400px;
border-radius:10px;
}
textarea
{
width:400px;
border-radius:10px;
}
.button
{
width:100px;
height:50px;
}
h2.title
{
color:floralwhite;
}
table
{
/* border:2px solid white;*/
width:100%;
}
ul
{
font-size:18px;
}
ol
{
font-size: 22px;
}
.class1
{
float:left;
}
.class2
{
float:right;
}
.c1
{
height:500;
width:350;
float:right;}
.c2
{
height:500;
width:350;
float:left}
</style>
</head>
<body>
<div class="right">
<div class="row">
<div class="col-sm-4 my-4">
<div class="card" style="width: 25rem;">
<img class="c2" align="center" src="clothes1.jpg" ></img>
<div class="card-body" style="background-color: rgba(51,153,255,0.2);">
<h5 class="card-title">Navy One Piece </h5>
<ul class="list-group list-group-flush">
<li class="list-group-item">Price: ₹2500</li>
<li class="list-group-item">Estimated delivery in 3-4 working days</li>
</ul>
<form action="purchase.php" method="POST">
<input type="submit" name="k1" class="btn btn-primary" style="margin-top: 5px;" value="Add to cart!">
</div>
</div>
</div>
<div class="col-sm-4 my-4">
<div class="card" style="width: 25rem;">
<img class="c1" align="center" src="clothes3.png"></img>
<div class="card-body" style="background-color: rgba(51,153,255,0.2);">
<h5 class="card-title">Tattered Jeans</h5>
<ul class="list-group list-group-flush">
<li class="list-group-item">Price: Rs 800</li>
<li class="list-group-item">Estimated delivery in 2-3 working days</li>
</ul>
<br>
<a href="purchase.php" class="btn btn-primary" name="k2" style="margin-top: 5px;">Add to cart!</a>
</div>
</div>
</div>
<div class="col-sm-4 my-4">
<div class="card" style="width: 25rem;">
<img class="c2"align="center" src="clothes2.jpg"></img>
<div class="card-body" style="background-color: rgba(51,153,255,0.2);">
<h5 class="card-title">Plain Skirt</h5>
<ul class="list-group list-group-flush">
<li class="list-group-item">Price: Rs 1850</li>
<li class="list-group-item">Estimated delivery in 2-3 working days</li>
</ul>
<a href="purchase.php" class="btn btn-primary" name="k3" style="margin-top: 5px;">Add to cart!</a>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-4 my-4">
<div class="card" style="width: 25rem;">
<img class="c2" src="clothes4.jpg"></img>
<div class="card-body" style="background-color: rgba(51,153,255,0.2);">
<h5 class="card-title">The Black Piece</h5>
<ul class="list-group list-group-flush">
<li class="list-group-item">Price: <div class="price" style="text-decoration:
linethrough; display: inline-block;">₹900</div> (20% off!) ₹720</li>
<li class="list-group-item">Estimated delivery in 2-3 days</li>
</ul>
<a href="purchase.php" class="btn btn-primary" name="k5" style="margin-top: 5px;">Add to cart!</a>
</div>
</div>
</div>
<div class="col-sm-4 my-4">
<div class="card" style="width: 25rem;">
<img class="c1"align="center" src="clothes6.jpg"></img>
<div class="card-body" style="background-color: rgba(51,153,255,0.2);">
<h5 class="card-title">Sleeved Shein's Piece</h5>
<ul class="list-group list-group-flush">
<li class="list-group-item">Price: ₹1400</li>
<li class="list-group-item">Estimated delivery in 5-6 working days</li>
</ul>
<a href="purchase.php" class="btn btn-primary" name="k4" style="margin-top: 5px;">Add to cart!</a>
</div>
</div>
</div>
<div class="col-sm-4 my-4">
<div class="card" style="width: 25rem;">
<img class="c1"align="center" src="c5.jpg"></img>
<div class="card-body" style="background-color: rgba(51,153,255,0.2);">
<h5 class="card-title">Full body Jumpsuit</h5>
<ul class="list-group list-group-flush">
<li class="list-group-item">Price: ₹399</li>
<li class="list-group-item">Estimated delivery in 1-2 days</li>
</ul>
<a href="purchase.php" class="btn btn-primary" name="k6" style="margin-top: 5px;">Add to cart!</a>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384- KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG
5KkN" crossorigin="anonymous"></script>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.mi
n.js"
integrity="sha384- ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0
b4Q" crossorigin="anonymous"></script>
<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
integrity="sha384-
JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCm
Yl" crossorigin="anonymous"></script>
</body>
</html>

IN EXACTLY SAME MANNER ACCESSORIES ,Fashion Trends
,Makeup AND KURTIS ARE ALSO CREATED
