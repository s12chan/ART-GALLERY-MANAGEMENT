<html>
<head>
<title>Display Arts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
    background-color:LavenderBlush;
}

*{
 margin: 0px;
 padding: 0px;
}
.menu1
{
    width:100%;
    overflow:auto;
    background-color:black;
    height:60px;
}
.menu1 ul
{
    margin:0px;
    padding:0px;
    list-style:none;


}
.menu1 ul ri
{
    float:left;
    
}

.menu1 ul ri a:hover {
  background-color: #696969;

  
}
.menu1 ul li
{
    float:right;
}

.menu1 ul li a:hover {
  background-color: #696969;

  
}
marquee{
      font-size: 15px;
      font-weight: bold;
      color:black;
      top:5px;
     
       background-color:cornsilk;
      font-family: sans-serif;
      }

#navbar  {
  float: right;
  padding: 16.5px;
  color:  white;
  text-decoration: none;
  font-size: 18px;
  font-family: 'Amarante';
  font-weight:900;
}
#navbar1  {
  float: right;
  padding: 16.5px;
  color:  white;
  text-decoration: none;
  font-size: 18px;
  font-family: 'Amarante';
  font-weight:900;
}
</style>
</head>
<body><div class="menu1">
<ul>
<ri><a href="view.php" id="navbar1">CATEGORIES: </a></ri>
<ri><a href="view_category.php?id=Oil painting" id="navbar1">OIL PAINTINGS</a></ri>
<ri><a href="view_category.php?id=Canvas painting" id="navbar1">CANVAS PAINTINS</a></ri>
<ri><a href="view_category.php?id=Pencil art" id="navbar1">PENCIL ART</a></ri>
<ri><a href="view_category.php?id=Watercolour painting" id="navbar1">WATERCOLOUR PAINTINS</a></ri>
    <ri><a href="view_category.php?id=Inkwash painting" id="navbar1">INKWASH PAINTINS</a></ri>
      


     <li><a href="artgalleryhome.html"id="navbar">BACK TO HOME</a></li>
     <li> <a href="sign.html" id="navbar"><i class="fas fa-user-alt"></i> REGISTER</a></li>
    
      
       
</ul>
</div>
 <marquee scrollamount="20" height:"15px" href="https://dev.to/kedar9/css-only-multi-color-backgrounds-paj" direction="left">Are    you   an    ARTIST ???    Showcase    your    talents    by    signing up!!!</marquee>


<center>
<form action="" method="POST" enctype="multipart/form-data">

<table width="50%" border="1" cellpadding="25" cellspacing="5">
<br>
<thead>

<tr>
<th>NAME</th>
<th>ART</th>
<th>CATEGORY</th>
<th>DESCRIPTION</th>
<th>DIMENSION(In Inches)</th>
<th>PRICE(In Rs)</th>
<th>EMAIL-ID</th>
<th>CONTACT</th>
</tr>
</thead>


<?php
include('dbconfig.php');
$id=$_GET['id'];
if($id=='Oil painting')
{
     echo "<p style='color:maroon; font-weight:bold; font-size:30px;'>OIL PAINTINGS</p>" ;
    $query="SELECT * FROM upload WHERE category='Oil painting'";

}
elseif($id=='Canvas painting')
{
    echo "<p style='color:maroon; font-weight:bold; font-size:30px;'>CANVAS PAINTINGS</p>" ;
    $query="SELECT * FROM upload WHERE category='Canvas painting'";

}
elseif($id=='Pencil art')
{
     echo "<p style='color:maroon; font-weight:bold; font-size:30px;'>PENCIL ART</p>" ;
    $query="SELECT * FROM upload WHERE category='Pencil art'";

}
elseif($id=='Watercolour painting')
{
    echo "<p style='color:maroon; font-weight:bold; font-size:30px;'>WATERCOLOUR PAINTINGS</p>" ;
    $query="SELECT * FROM upload WHERE category='Watercolour painting'";

}
elseif($id=='Inkwash painting')
{
    echo "<p style='color:maroon; font-weight:bold; font-size:30px;'>INKWASH PAINTINGS</p>" ;
    $query="SELECT * FROM upload WHERE category='Inkwash painting'";

}
else{
    $query="SELECT * FROM upload";
}

$sql=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($sql))
{
  ?>
 
   
     <br>
    <tr>
    <td><?php echo $row['name']?></td>
    <td> <?php echo'<img src="data:image/png ;base64,'.base64_encode($row['image']).' " alt="Image" width="300" height="200">';?></td>
    <td><?php echo $row['category']?></td>
    <td><?php echo $row['description']?></td>
    <td><?php echo $row['dimension']?></td>
    <td><?php echo $row['price']?></td>
    <td><?php echo $row['emailid']?></td>
    <td><?php echo $row['contact']?></td>
    </tr>
    <?php
}
?>
</table>
</form>
</center>
</body>
</html>


