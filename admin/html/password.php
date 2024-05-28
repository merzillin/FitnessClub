
<?php
include "header.php";
?>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">CHANGE PASSWORD</a>
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
                  <h4 class="card-title">Change password</h4>
                  <p class="card-category">Change your password,set a new password</p>
                </div>
                <div class="card-body">
                  <form action="#" method="POST" enctype="multipart/form-data">
                    <?php
                     include "dbconnect.php";
                    $sql="select * from login where usertype='admin'";
                    $result=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($result))
                    {
                      ?>
                      USER ID &nbsp &nbsp &nbsp &nbsp &nbsp<input type="text" name="user_id" readonly="" value="<?php echo $row['id']; ?>"><br>
                      USER NAME &nbsp<input type="text" name="user_name" readonly="" value="<?php echo $row['username']; ?>"><br>
                      PASSWORD &nbsp &nbsp<input type="text" name="password" readonly="" value="<?php echo $row['password']; ?>"><br>
                      USERTYPE &nbsp &nbsp<input type="text" name="usertype" readonly="" value="<?php echo $row['usertype']; ?>"><br>
                    <?php 
                  } ?>
                    <input type="password" name="new" placeholder="Enter new password" required>

 
   <input type="submit" class="btn btn-primary btn-round" name="submit" value="Change">
        

 

                </form>
                </div>
              </div>
            </div></div>
          </div>
        </div>
      </div>
     <?php
     if(isset($_POST["submit"]))
     {
     include "dbconnect.php";
     $new=$_POST["new"];
     $sql="update login set password='$new' where usertype='admin'";
     $run=mysqli_query($con,$sql);
     if($run)
      {
        echo "<script>alert('Password Changed Successfully')</script>";
      }
      else
      {
        echo "<script>alert('Password Change failed')</script>";
      }
      }
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
     include "footer.php";
     ?>


