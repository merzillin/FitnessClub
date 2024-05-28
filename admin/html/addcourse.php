<?php
include "header.php";
?>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Course Management</a>
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
                  <h4 class="card-title">Course Registration</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <form action="#" method="POST" enctype="multipart/form-data">
 
 
    
          <table>
          <tr><td>Course Name</td><td><input type="text" name="name" required></td></tr>
          <tr><td>Description</td><td><textarea name="description" required></textarea></td></tr>
          
  
          
          <tr><td>Course Fee</td><td><input type="text" name="fee" required></td></tr>
          <tr><td>days</td><td><input type="text" name="days" required></td>
            
           <tr><td><input type="submit" class="btn btn-primary btn-round" value="Insert Course " name="submit" ></td></tr>
          </table>
        
        </form>
        

                
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                
                
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
  
$name=$_POST["name"];
$description=$_POST["description"];

$fee=$_POST["fee"];
$days=$_POST["days"];
//name of folder to which the file is uploaded

    include "dbconnect.php";
    $sql="insert into course(id,cname,description,fee,days) values('$courseid','$name','$description','$fee','$days')";
    $result=mysqli_query($con,$sql);
    echo "<script>alert('Successfully Inserted')</script>";

  } else
    echo "Sorry, there was an error uploading your file.";
  
?>


