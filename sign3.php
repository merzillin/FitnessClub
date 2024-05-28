<html>
<head>
<style>
body
{
margin:0;
padding:0;
background-color:grey;
}
#a
{
width:300px;
padding:40px;
position: absolute;
top:50%;
left:50%;
transform: translate(-50%,-50%);
background:black;
text-align: center;
color:white;

}
#a input[type="text"], #a input[type="password"]
{
border:0;
background-color: none;
display:block;
margin:20px auto;
text-align:center;
border:2px solid blue;
padding:14px 10px;
width:200px;
outline:none;
color:black;
border-radius: 24px;
transition:0.25s;
}
#a input[type="text"]:focus,#a input[type="password"]:focus
{
width:280px;
border-color:green;
}
#a input[type="submit"]
{
border:0;
background-color: none;
display:block;
margin:20px auto;
text-align:center;
border:2px solid green;
padding:14px 40px;
width:200px;
outline:none;
color:blue;
border-radius: 24px;
transition:0.25s;
cursor: pointer;
}
#a input[type="submit"]:hover
{
background-color: green;
}
</style>
</head>
<body>
	

<form id="a" action="#" method="POST" onSubmit="return validatePassword()">
	<h2>user</h2>
	<input type="password" name="password" placeholder="enter your current password">
	<input type="password" name="cpassword" placeholder="enter your new password">
	<input type="submit" name="submit" value="Submit">

</form>
</body>
</html>

<?php
if(isset($_POST["submit"]))
{
include "dbconnect.php";
$id=$_SESSION["id"];
$cpassword=$_POST["password"];
$npassword=$_POST["cpassword"];
$conpassword=$_POST["confirmPassword"];
$sql="select * from login where id=$id";
echo $sql;
$result=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($result))
  $pass=$row["password"];
echo $pass;
if($pass==$cpassword)
{  
  if($npassword==$conpassword)
  {
    include "dbconnect.php";
    $sql="update login set password='$npassword' where id=$id";
      echo $sql;
      $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "<script>alert('Password Changed Successfully')</script>";

    }

  }
  else
  {
    //echo $pass;
  echo "<script>alert('Password Mismatch')</script>"; 
  }
}
else
  {
    echo "<script>alert('Incorrect Password')</script>";
  }
}
?>

