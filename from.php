<?php include "header2.php";?>
<script type="text/javascript">

  function checkForm(form)
  {
    if(form.name.value == "") {
      alert("Error: name cannot be blank!");
      form.username.focus();
      return false;
    }
    

    if(form.password.value != "") {
      if(form.password.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.password.focus();
        return false;
      }
      
      re = /[0-9]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.pwd1.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.password.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.password.focus();
        return false;
      }
    } 

    //alert("You entered a valid password: " + form.password.value);
    return true;
  }

</script>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center pt-70">
                                <h2>New Members</h2>
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
                                            <h2>Membership Form</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <!--End Section Tittle  -->
                            <form id="contact-form" action="#" method="POST" onsubmit="return checkForm(this);">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box user-icon mb-30">
                                            <input type="text" name="name" placeholder="Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box email-icon mb-30">
                                            <input type="text" name="phone" placeholder="Phone number" required>
                                        </div>
                                    </div>
                                  <div class="col-lg-6 col-md-6">
                                        <div class="form-box subject-icon mb-30">
                                            <input type="Email" name="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                     
                                     <div class="col-lg-6 col-md-6">
                                        <div class="form-box subject-icon mb-30">
                                            <input type="number" name="age" placeholder="age" required>
                                        </div>
                                    </div>
                                     <div class="col-lg-6 col-md-6">
                                        <div class="form-box subject-icon mb-30">
                                            <input type="date" name="dob" placeholder="date of birth" max="<?php echo date('Y-m-d'); ?>" required>
                                        </div>
                                    </div>
                                    
                                     <div class="col-lg-6 col-md-6 mb-30">
                                        <div class="select-itms1">
                                            <select name="blood" id="select3">
                                                <option value="BLOOD GROUP A+">BLOOD GROUP A+</option>
                                                <option value="BLOOD GROUP A-">BLOOD GROUP A-</option>
                                                <option value="BLOOD GROUP AB+">BLOOD GROUP AB+</option>
                                                <option value="BLOOD GROUP AB-">BLOOD GROUP AB-</option>
                                                <option value="BLOOD GROUP O+">BLOOD GROUP O+</option>
                                                 <option value="BLOOD GROUP O-">BLOOD GROUP O-</option>
                                            </select>
                                        </div>
                                    </div>
                                     <div class="col-lg-6 col-md-6">   
                                        <div class="form-box subject-icon mb-30">
                                            <input type="number" name="height" placeholder="height(cm) " required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box subject-icon mb-30">
                                            <input type="number" name="weight" placeholder="weight(kg)" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-30">
                                        <div class="select-itms">
                                             <select name="course" id="select3" required>
                                                <option>--Select--</option>
                                                <?php
                                                include "dbconnect.php";
                                                $sql="select  *  from course";
                                                $result=mysqli_query($con,$sql);
                                                while($row=mysqli_fetch_array($result))
                                                {
                                                echo "<option value='$row[cname]'>$row[cname]</option>";
                                                }
                                                ?>
                                                </select>
                                        </div>
                                    </div>
                                     <div class="col-lg-12 col-md-12">
                                        <div class="form-box subject-icon mb-30">
                                            <input type="text" name="address" placeholder="residential address" required="">
                                                          
                                        </div>
                                  
                                     <div class="col-lg-6 col-md-6">   
                                        <div class="form-box subject-icon mb-30">
                                            <input type="password" name="password" placeholder="Password " required="">
                                        </div>
                                    </div>
                                        <div class="submit-info">
                                            <button class="btn" type="submit" name="submit">JOIN</button>
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
   // print_r($_POST);exit();
$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$age=$_POST["age"];
$dob=$_POST["dob"];
$blood=$_POST["blood"];
$height=$_POST["height"];
$weight=$_POST["weight"];
$course=$_POST["course"];
$address=$_POST["address"];
$password=$_POST["password"];
include "dbconnect.php";
$sql="select * from login where username='$email'";
$result=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($result))
  {
    echo "<script>alert('Email id Already registered')</script>";
  }
else
{
$sql="insert into login (username,password,usertype) values('$email','$password','member')";
echo $sql;
$result=mysqli_query($con,$sql);
//$id=0;
if($result)
{
 /* $sql="select max(id) as id  from login";
  $result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($result))
  {
    $id=$row["id"];
  }*/
  /*$sql="insert into registeration(Name,Phone_number,Email,Age,Date_of_Birth,Blood_group,Height,Weight,Course,Address,userid) values('$name','$phone','$email','$age','$dob','$blood','$height','$weight','$course','$address','$id')";*/
  $sql="insert into registeration(Name,Phone_number,Email,Age,Date_of_Birth,Blood_group,Height,Weight,Course,Address) values('$name','$phone','$email','$age','$dob','$blood','$height','$weight','$course','$address')";
    echo $sql;
    $result=mysqli_query($con,$sql);
    echo "<script>alert('Successfully Inserted')</script>";
    $_SESSION["success"]='Successfully Inserted';
}

else
    echo "<script>alert('Insertion failed')";
}
}
?>

