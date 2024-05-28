<?php
include "header.php";
$id=$_GET["id"];
?>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Update Course Details</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            
            <ul class="navbar-nav">
             
             
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Course Details</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                <form action="#" method="POST" enctype="multipart/form-data">
  <table>
            <?php
  include "dbconnect.php";

  $sql="select * from course where id=$id";
  $result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($result))
  {
  ?>
      <tr><td>course name</td>
      <td><input type="hidden" name="id" value=<?php echo $row["id"]; ?>>
        <input type="text" name="name" value=<?php echo $row["cname"]; ?>></td></tr>
          <tr><td>Description</td><td><textarea name="description"><?php echo $row["description"];?></textarea></td></tr>
          
          <tr><td>Fee</td><td><input type="text" name="fee" value="<?php echo $row["fee"];?>"></td></tr>
          <tr><td>Days</td><td><input type="text" name="days" value="<?php echo $row["days"];?>"></td></tr>
          <tr>
          <td><input type="submit" class="btn btn-primary btn-round" value="Update Course " name="submit" >
          </td></tr>
          </table>
      </form>
<?php
}
?>
 
    
        

                
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img" src="../assets/img/faces/marc.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                  <h4 class="card-title">Alec Thompson</h4>
                  <p class="card-description">
                   
                  </p>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     <?php
     include "footer.php";
     ?>

     <script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>

<?php
if(isset($_POST["submit"]))
{
$id=$_POST["id"];
$name=$_POST["name"];
$description=$_POST["description"];
$fee=$_POST["fee"];
$days=$_POST["days"];

    include "dbconnect.php";
    $sql="update course set cname='$name',description='$description',fee='$fee',days='$days' where id=$id";
    $result=mysqli_query($con,$sql);
    echo "<script>alert('Successfully Inserted')</script>";

  } 
  

?>


