<?php include "header.php";?>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center pt-70">
                                <h2>contact form</h2>
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
                                            <h2>contact here</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <!--End Section Tittle  -->
                            <form id="contact-form" action="#" method="POST">
                                <div class="row">
                                     <div class="col-lg-6 col-md-6">
                                        <div class="form-box subject-icon mb-30">
                                            <h2>comment</h2><textarea name="comment" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box user-icon mb-30">
                                           <h2>name</h2> <input type="text" name="name" placeholder="Name" required>
                                        </div>
                                    </div>
                                   
                                        <div class="col-lg-6 col-md-6">
                                        <div class="form-box subject-icon mb-30">
                                            <h2>email</h2><input type="Email" name="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                     
                                    
                                    
                                     
                                     
                                    
                                    
                                     
                                  
                                     
                                        <div class="submit-info">
                                            <button class="btn" type="submit" name="submit">post</button>
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
        <?php
if(isset($_POST["submit"]))
{
$comment=$_POST["comment"];
$name=$_POST["name"];
$email=$_POST["email"];
include "dbconnect.php";
$sql="insert into contact(comment,name,email) values('$comment','$name','$email')";
$result=mysqli_query($con,$sql);
if($result)   
    echo "<script>alert('Successfully Inserted')</script>";
    echo '<meta http-equiv="refresh" content="0;contact.php">';
}
?>
    </main>
    <?php include "footer.php"; ?>
    