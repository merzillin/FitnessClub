<?php include "header2.php";?>
    <main>
        <!--? Hero Start -->
         <section class="services-area pt-100 pb-150 section-bg" data-background="assets/img/gallery/section_bg01.png">
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center pt-70">
                                <h2>feedback</h2>
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
                                            <h2>feedback</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Section Tittle  -->
                            <center>
                            <form id="contact-form" action="#" method="POST">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box subject-icon mb-30">
                                            <h2>comment</h2><textarea name="comment" required></textarea>
                                        </div>
                                    </div>
                                    
                                        <br><br>
                                   
                                    
                                    <div class="submit-info">
                                    <button class="btn" type="submit" name="submit">post</button>
                                    </div>
                                    </div>
                                </div>
                            </form>
                        </center>
                        </div>
                    </div>
                </div>
            </div>
             <!-- contact left Img-->
            
        </div>
      </section>  <!-- Contact form End -->
    </main>
    <?php include "footer.php"; ?>
    
<?php
if(isset($_POST["submit"]))
{
$comment=$_POST["comment"];
include "dbconnect.php";
$sql="insert into Feedback(comment) values('$comment')";
$result=mysqli_query($con,$sql);
if($result)   
    echo "<script>alert('Successfully Inserted')</script>";
    echo '<meta http-equiv="refresh" content="0;comment.php">';
}
?>

