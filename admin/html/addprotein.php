<?php
include "header.php";
?>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">User Profile</a>
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
                  <h4 class="card-title">Trainer Registration</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <form action="#" method="POST" enctype="multipart/form-data">
 
 
    
           <table>
          <tr><td>Product Name</td><td><input type="text" name="name" required></td></tr>
           <tr><td>price</td><td><input type="text" name="price" required></td></tr>
            <tr><td>shop</td><td><input type="text" name="shop" required></td></tr>
           
          <!--<tr><td>Phone Number</td><td><input type="text" name="phone">-->
          <tr><td>Upload Image</td><td><input type="file" name="fileToUpload" id="fileToUpload"accept="image/*" onchange="loadFile(event)">
          <img id="output" width="100px"/></td></tr>
         
          
           <tr><td><input type="submit" class="btn btn-primary btn-round" value="Insert Trainer" name="submit" ></td></tr>
          </table>
        
        </form>

<?php
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$price=$_POST["price"];
$shop=$_POST["shop"];
$target_dir= "uploads/";
//to get the name of file to store to database
$filename=basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". $filename . " has been uploaded.";
include "../../dbconnect.php";
$sql="insert into protein(image,name,price,shop) values('$filename','$name','$price','$shop')";
//echo $sql;
$result=mysqli_query($con,$sql);
echo "<script>alert('Successfully Inserted')</script>";
}
}
?>


    

                
                </div>
              </div>
            </div>
            <div class="col-md-4">
              
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



