
<?php
$email=$_POST["email"];
$password=$_POST["password"];
include "dbconnect.php";
$sql="select * from login where username='$email' and password='$password'";

$result=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($result))
  {
    $_SESSION["userid"]=$row["id"];
    $usertype=$row["usertype"];
    echo $usertype;
    if($usertype=="member")
    {
           
      //header("location:user/index.php");
          echo '<meta http-equiv="refresh" content="0;fitnessclub/userindex.php">';
      
    }
    if($usertype=="admin")
    {
     // header("location:admin/index.php");
      echo '<meta http-equiv="refresh" content="0;admin/html/addtrainer.php">';
    }
  }
else
{
    echo "<script>alert('Failed')";
}

?>

