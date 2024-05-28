<?php
session_start();
//$id=$_GET["id"];

?>

<?php
include "header.php";
?>
<div class="container">
  <h1 class="title">Booking</h1>
   <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
         
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
          <form action="#" method="POST" enctype="multipart/form-data">
          <table>
          <tr><td>Feedback/Complaint</td>
          <td><textarea name="comment" placeholder="Feedback"></textarea></td></td>
           <tr><td><input type="submit" class="btn btn-primary btn-round" value="Submit Your Feedback" name="submit" ></td></tr>
          </table>
        
        </form>
<br>
<br>
<br>
                
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img" src="logo.png" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                  <h4 class="card-title">Farsana/Meenakshi</h4>
                  <p class="card-description">
                   
                  </p>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
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
    $comment=$_POST["comment"];
    $userid=$_SESSION["userid"];
    
    $sql="insert into feedback(userid,comment) values('$userid','$comment')";
    echo $sql;
    $result=mysqli_query($con,$sql);

    if($result)
      echo "<script>alert('Successfully Submitted your Feedback')</script>";
}

?>