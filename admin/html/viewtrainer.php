<?php
include "header.php";
?>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Trainer Details</a>
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
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">View Trainer Details</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                   <table id="example">
    <thead>
      <tr><th>change</th> <th>delete</th><th>TrainerID</th><th>Name</th><th>Phone Number</th><th>Image</th><th>courseid</th></tr>
    </thead>
    <tbody>
      <?php
      //$id=$_GET["id"];
      include "dbconnect.php";
      $sql="SELECT * FROM trainer";
      //$sql="SELECT * FROM trainer,course WHERE trainer.courseid=course.courseid ";
  $result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($result))
  {
   
      ?>
      <tr>
      
        <td><a href="edittrainer.php?id=<?php echo $row["id"]; ?>">change</a> </td>
        <td><a href="deletetrainer.php?id=<?php echo $row["id"]; ?>">remove</a></td>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["phoneno"]; ?></td>

        <td><img width="100px" src='uploads/<?php echo $row["image"]; ?>'></td>
          <td><?php echo $row["courseid"]; ?></td>
    
    </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  <script>
  $(function(){
    $("#example").dataTable();
  })
  </script>



                
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

?>

