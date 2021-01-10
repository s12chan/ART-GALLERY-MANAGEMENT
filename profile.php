<?php
session_start(); 
include('agconfig.php');
        ?>
<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<style>

body{
margin:0;
padding:0;
background:lightpink;
background-size:cover;
background-position:center;
font-family:sans-serif;
}
body input{
border:none;
border-bottom:none;
background:transparent;
outline:none;
height:40px;
color:forestgreen;
font-size:30px;
}
.cont{
width:350px;
height:400px;
background:white;
color:forestgreen;
top:50%;
left:50%;
position: absolute;
transform:translate(-50%,-50%);
box-sizing:border-box;
padding:30px 30px;
text-align:center;
}
.cont h2{
margin:0;
padding:0;
text-align:left; font-size:22px;
top:300px;
}
.cont input[type="text"]{
border:none;
border-bottom:none;
background:transparent;
outline:none;
height:40px;
color:forestgreen;
font-size:16px;
}
.cont input[type="submit"]{
border:none;
outline:none;
height:40px;
background:forestgreen;
color:#fff;
font-size:18px;
margin:auto;
display:flex;
width:150px;
text-align:center;
padding:auto;
}
.cont textarea{
border:none;
border-bottom:none;
background:transparent;
outline:none;
height:40px;
color:blue;
font-size:16px;
padding:auto;
margin:auto;
}


.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<!--<div class="container">

<h2>Hi!</h2>

<ul>
<li><a href=#>My Profile</a></li>
<li><a href=#>My Arts</a></li>
<li><a href=#>Sign Out</a></li>
</ul>

</div>-->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="myprofile.php">My Profile</a>
  <a href="#">My Arts</a>
  <a href="artgalleryhome">Sign Out</a>
 
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
 <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;<?php

      $q=mysqli_query($conn,"SELECT * FROM agreg where Uname='$_SESSION[Uname]' ");
     $row=mysqli_fetch_assoc($q);
    
echo "Welcome ",$_SESSION['Uname'];
?></span> 
<div class="cont">
<form action="">
<?php
        echo "<b>";
        echo "<table class='table table-bordered'>";
          echo "<tr>";
            echo "<td>";
              echo "<b> Name: </b>";
            echo "</td>";

            echo "<td>";
              echo $row['Uname'];
            echo "</td>";
          echo "</tr>";
          echo "<tr>";
            echo "<td>";
              echo "<b> Mail: </b>";
            echo "</td>";
            echo "<td>";
              echo $row['mail'];
            echo "</td>";
          echo "</tr>";

          echo "<tr>";
            echo "<td>";
              echo "<b> Mobile Number: </b>";
            echo "</td>";
            echo "<td>";
              echo $row['mobnum'];
            echo "</td>";
          echo "</tr>";

          echo "<tr>";
            echo "<td>";
              echo "<b> Password: </b>";
            echo "</td>";
            echo "<td>";
              echo $row['Pass'];
            echo "</td>";
          echo "</tr>";

          echo "<tr>";
            echo "<td>";
              echo "<b> Address: </b>"; 
            echo "</td>";
            echo "<td>";
              echo $row['Addr'];
            echo "</td>";
          echo "</tr>";


          
        echo "</table>";
        echo "</b>";
      ?>
<input type="text" placeholder="<?php echo $row['Uname']?>" name="UName" ><br>
</form>

</div>

</body>
</html>