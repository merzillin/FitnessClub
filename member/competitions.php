<?php 
error_reporting(0);
include "header2.php";?>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center pt-70">
                                <h2>Competitions</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="services-area pt-100 pb-150 section-bg" data-background="assets/img/gallery/section_bg01.png">
            <!--? Want To work -->
            <section class="wantToWork-area w-padding">
                <div class="container">
                    <div class="row align-items-end justify-content-between">
                        <div class="col-lg-6 col-md-10 col-sm-10">
                            <div class="section-tittle section-tittle2">
                                <span>OUR TRAINERS FOR YOU</span>
                                <h2>Stay Healthy</h2>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </section>
            <!-- Want To work End -->
           <div class="container">
                <div class="row">
<?php
include "dbconnect.php";
$sql="select * from competition";

//echo "<script>alert('Hello');</script>";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
  {
?>


                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-cat single-cat2 text-center mb-50">
                            <div class="cat-icon">
                                <i class="flaticon-fitness"></i>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="">
                                <?php echo $row["name"]; ?></a></h5>
                                <p>Time:<?php echo $row["time"]; ?></p>
                                <p>Date:<?php echo $row["date"]; ?></p>
                                <p>Date:<?php echo $row["contact"]; ?></p>
                                <p>Date:<?php echo $row["venue"]; ?></p>
                            </div>
                            
                        </div>
                    </div>

<?php
}
?>
                </div>
            </div>
        </section>
        <!-- Services Area End -->
        <!--? About-2 Area Start -->
        
             <!-- contact left Img-->
            <div class="from-left d-none d-lg-block">
                <img src="assets/img/gallery/contact_form.png" alt="">
            </div>
        </div>
        <!-- Contact form End -->
    </main>
    <?php include "footer2.php"; ?>
    