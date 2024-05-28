<?php include "header.php";?>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center pt-70">
                                <h2>Achievements</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? About Area Start -->
        <!-------ACHIEVEMENT1---->
        <section class="about-area section-padding30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <img src="assets/img/gallery/ac2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle3 mb-35">
                                <span>WINNER</span>
                                <h2>2019 IFBB Classic Physique up to 180 cm category world champion</h2>
                            </div>
                            <p class="pera-top">Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfect replication of the designers is intended.</p>
                            <p class="mb-65 pera-bottom">Brook presents your services with flexible, convefnient and chient anipurpose layouts. You can select your favorite layouts.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <!-------ACHIEVEMENT2----->
        <section class="about-area section-padding30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <img src="assets/img/gallery/ac2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle3 mb-35">
                                <span>WINNER</span>
                                <h2>2019 IFBB Classic Physique over 180 cm category world champion</h2>
                            </div>
                            <p class="pera-top">Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfect replication of the designers is intended.</p>
                            <p class="mb-65 pera-bottom">Brook presents your services with flexible, convefnient and chient anipurpose layouts. You can select your favorite layouts.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <center>
                 <marquee direction="up" scrollamount=2>
                 <b><u><p style="color: red;font-size: 50px;" align="center"> UP coming competitions </p></u></b>
                </marquee>
                <br><br><br>  
        </center>
        <div class="container">
                <div class="row">
                              
<?php
include "dbconnect.php";
//$sql="SELECT t.name as tname,c.name as cname,time, FROM coursetime co,trainer t,course c where co.trainerid=t.id and c.courseid=t.id";
//echo "<script>alert('Hello');</script>";
$sql="SELECT  * from competition ";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
  {
?>
         <marquee direction="left" scrollamount=5 bgcolor="yellow">
            <br><br>
      <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-cat single-cat2 text-center mb-50">
                            
                            <div class="cat-cap">
                                <font color="black">
                                <h2><?php echo $row["name"]; ?></h2>
                                <h1>time : <?php echo $row["time"]; ?></h1>
                                <h1>date : <?php echo $row["date"]; ?></h1>
                                <h1>contact : <?php echo $row["contact"]; ?></h1>
                                <h1>venue : <?php echo $row["venue"]; ?></h1>
                                 </font>
                            </div>
                           
                        </div>
        </div>
    </marquee>
        <?php
}
?>
    </div>
</div>
       
        <section class="wantToWork-area w-padding section-bg" data-background="assets/img/gallery/section_bg02.png">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 col-lg-7 col-md-8 col-sm-10">
                        <div class="wantToWork-caption">
                            <h2>April membership offer available Now</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <a href="from.php" class="btn wantToWork-btn f-right">JOIN NOW</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To work End -->
    </main>
  <?php include "footer.php"; ?>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
   