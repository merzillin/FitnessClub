<?php include "header2.php";?>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center pt-70">
                                <h2>Courses</h2>
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
                                <span>OUR Courses FOR YOU</span>
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
$sql="SELECT c.courseid,t.name as tname,c.name as cname,description,c.image,time,fee,description FROM coursetime co,trainer t,course c where co.trainerid=t.trainerid and c.courseid=t.courseid";
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
                                <img src="../uploads/<?php echo $row["image"]; ?>" width=100px>
                                <h2><a href="">
                                <?php echo $row["cname"]; ?></a></h5>
                               
                                <h3><?php echo $row["description"]; ?></p>
                                <h3>Rs.<?php echo $row["fee"]; ?></p>
                                <h3><a href="trainers.php?id=<?php echo $row["courseid"]; ?>" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.8s">View Trainers</a>
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
    