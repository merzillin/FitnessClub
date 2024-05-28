<?php include "header.php"; ?>
 <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center pt-70">
                                <h2>class time</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? About Area Start -->
        
<section class="services-area pt-100 pb-150">
            <!--? Want To work -->
            <section class="wantToWork-area w-padding">
                <div class="container">
                    <div class="row align-items-end justify-content-between">
                        <div class="col-lg-6 col-md-10 col-sm-10">
                            <div class="section-tittle">
                                <span>our trainings FOR YOU</span>
                                <h2>stay healthy</h2>
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
$sql="SELECT t.name as tname,c.cname as cname,description,t.image as timage,time,fee FROM coursetime co,trainer t,course c where co.trainerid=t.id and c.id=t.courseid";
//echo "<script>alert('Hello');</script>";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
  {
?>
      <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-cat single-cat2 text-center mb-50">
                            <div class="cat-icon">
                                <img src="uploads/<?php echo $row["timage"]; ?>" width=100px>
                            </div>
                            <div class="cat-cap">
                                <h2><?php echo $row["cname"]; ?></h2>
                                <h1>Class time : <?php echo $row["time"]; ?></h1>
                            </div>
                           
                        </div>
                    </div>

<?php
}
?>
                </div>
            </div>
        </section>
        <?php include "footer.php";?>