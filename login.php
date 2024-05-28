<?php include "header2.php";?>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center pt-70">
                                <h2>Login</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Contact form Start -->
        <div class="contact-form-main mt-100 mb-100">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-7 col-lg-7">
                        <div class="form-wrapper">
                            <!--Section Tittle  -->
                            <div class="form-tittle">
                                <div class="row ">
                                    <div class="col-lg-11 col-md-10 col-sm-10">
                                        <div class="section-tittle">
                                            <span></span>
                                            <h2>Login</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Section Tittle  -->
                            <form id="contact-form" action="#" method="POST">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box subject-icon mb-30">
                                            <input type="Email" name="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    
                                        <br><br>
                                   
                                    <div class="col-lg-6 col-md-6">   
                                    <div class="form-box subject-icon mb-30">
                                        <input type="password" name="password" placeholder="Password "required>
                                        </div>
                                    </div>
                                    <div class="submit-info">
                                    <button class="btn" type="submit" name="submit">LOGIN</button>
                                    </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
             <!-- contact left Img-->
            <div class="from-left d-none d-lg-block">
                <img src="assets/img/gallery/contact_form.png" alt="">
            </div>
        </div>
        <!-- Contact form End -->
    </main>
    <?php include "footer.php"; ?>

<?php
if(isset($_POST["submit"]))
{
$email=$_POST["email"];
$password=$_POST["password"];
include "dbconnect.php";
$sql="select * from login where username='$email' and password='$password'";
echo "<script>alert('Hello');</script>";
$result=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($result))
  {
    $_SESSION["userid"]=$row["id"];
    $usertype=$row["usertype"];
    echo $usertype;
    if($usertype=="member")
    {
           
      //header("location:user/index.php");
          echo '<meta http-equiv="refresh" content="0;userindex.php">';
      
    }
    if($usertype=="admin")
    {
     // header("location:admin/index.php");
      echo '<meta http-equiv="refresh" content="0;admin/html/viewusers.php">';
    }
  }
else
{
    echo "<script>alert('Failed')";
}
}
?>

