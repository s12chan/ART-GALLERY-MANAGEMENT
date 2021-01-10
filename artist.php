<!DOCTYPE html>
<html>
<head>
  <title>UPLOAD ARTS</title>
 <link rel="stylesheet" href="agstyles.css">
     
</head>
<head>
<style>

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
  background-color:black;
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
label{
    color: black;  
    font-size: 17px;  
    font-weight:bold;
    float:left;
}  
.login{  
        width: 300px;  
        overflow: hidden;  
        margin: auto;  
        margin: 50 0 0 40;  
        padding-top: 20px;
        padding-right: 70px;
        padding-bottom: 60px;
        padding-left: 70px;  
        background: skyblue;
        border-radius: 15px ;  
         
}  

</style>
</head>
<body>
<div class="menu1">
<ul>
<ri><a href="#" id="navbar1" style="background-color:black;">ART GALLERY</a></ri>


     <li><a href="artgalleryhome.html"id="navbar"><i class="fas fa-home">BACK TO HOME</a></li>
     
      
       
</ul>
</div>
 <marquee scrollamount="20" height:"15px" href="https://dev.to/kedar9/css-only-multi-color-backgrounds-paj" direction="left">Are    you   an    ARTIST ???    Showcase    your    talents    by    signing up!!!</marquee>
<center><h2>HI ARTIST!! UPLOAD YOUR ART HERE...</h1></center>
<div class="login">

 <form action="" method="POST" enctype="multipart/form-data">
 <label> Enter Name</label><br>
  <center><input type="text" name="name" style="font-weight:bold; color:black"placeholder="Enter Name"/><br></center>

  


 <label > Choose art</label><br>
 <center><input type="file" name="image" style="font-weight:bold; color:black"id="image"/><br></center> 

  <label> Choose category</label><br>
  <center><input type="text" name="category" style="font-weight:bold; color:black"placeholder="Enter Category"/><br>

 <label>Enter Description</label><br>
 <center><textarea id="artdescription" name="description" rows="4" cols="40"></textarea></center>

  <label> Enter Dimension</label><br>
  <center><input type="integer" name="dimension" style="font-weight:bold; color:black"placeholder="Enter Dimension"/><br></center>

<label> Enter price</label><br>
  <center><input type="integer" name="price" style="font-weight:bold; color:black" placeholder="Enter Price"/><br></center>

 <label> Enter E-mailid</label><br>
<center><input type="text" name="emailid" style="font-weight:bold; color:black"placeholder="Enter E-mailid"/><br></center>

<label> Enter Contact No</label><br>
  <center><input type="text" name="contact" style="font-weight:bold; color:black"placeholder="Enter ContactNo"/><br></center>

 <input type="submit" name="submit" style="font-weight:bold; color:black" value="Upload"/><br>

</center>
</div>
</form>
</body>
</html>
<?php
include('dbconfig.php');

if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $category=$_POST['category'];
  $description=$_POST['description'];
  $dimension=$_POST['dimension'];
  $price=$_POST['price'];
  $emailid=$_POST['emailid'];
  $contact=$_POST['contact'];

    $sql="INSERT INTO `upload`(name,image,category,description,dimension,price,emailid,contact) VALUES('$name','$file','$category','$description','$dimension','$price','$emailid','$contact')";
    
if ($conn->query($sql) === TRUE){
      echo '<script type="text/javascript"> alert("Image Uploaded")</script> ';
 
    }

   else{
    echo '<script type="text/javascript"> alert("Image Not Uploaded")</script> ';
   }
}

?>