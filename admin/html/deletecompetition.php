
 <?php
  include "dbconnect.php";
  $id=$_GET["id"];
  $sql="delete  from competition where id=$id";
  $result=mysqli_query($con,$sql);
  if($result)
   echo "<script>alert('Deleted Successfully')</script>";
   echo '<meta http-equiv="refresh" content="0;viewcompetition.php">';
  ?>