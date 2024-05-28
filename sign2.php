<?php
session_start();
include "header.php";
?>
 
    <div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mx-auto text-center">
            <h2 class="text-white">Change Password</h2>
            <p>You Can Update Your Password For Better Security</p>
            <br>
            <form action="#" method="POST">
<form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
<div style="width:500px;">
<!--<div class="message"><?php if(isset($message)) { echo $message; } ?></div>-->
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2"><h2></h2></td>
</tr>
<tr>
<td width="40%"><label>Current Password</label></td>
<td width="60%"><input type="password" name="currentPassword" class="txtField"/><span id="currentPassword" class="required"></span></td>
</tr>
<tr>
<td><label>New Password</label></td>
<td><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required"></span></td>
</tr>
<td><label>Confirm Password</label></td>
<td><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</div>
</div>
</div>
<?php
include "footer.php";
?>

<?php
if(isset($_POST["submit"]))
{
include "../dbconnect.php";
$userid=$_SESSION["userid"];
$cpassword=$_POST["currentPassword"];
$npassword=$_POST["newPassword"];
$conpassword=$_POST["confirmPassword"];
$sql="select * from login where id=$userid";
echo $sql;
$result=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($result))
  $pass=$row["password"];
echo $pass;
if($pass==$cpassword)
{  
  if($npassword==$conpassword)
  {
    include "../dbconnect.php";
    $sql="update login set password='$npassword' where id=$userid";
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





