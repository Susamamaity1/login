<?php
session_start();
include_once('header.php');
include_once('conn.php');
$phone_no = $_SESSION['id'];
if(isset($_POST['submit'])){
  $pass = $_POST['user_password'];
    $cpass = $_POST['confirm_password'];
if($pass != $cpass){
    $smsg ="Password mismatch";
}else{
    $m_pass = md5($pass);
 $update_q = "UPDATE `user_tbl` SET `user_password`='$m_pass'  where phone_number='$phone_no'";
  $up_q = mysqli_query($conn,$update_q);
if($up_q){
      $msg = "Password updated successfully";
}
}

}
?>

 <section id="home" class="hero-area">
        <div class="container">
            <div class="row align-items-center" style="display:none;">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="hero-content">
                        <h1 class="wow fadeInLeft" data-wow-delay=".4s">A powerful app for your business.</h1>
                        <p class="wow fadeInLeft" data-wow-delay=".6s">From open source to pro services, Piqes helps you
                            to build, deploy, test, and monitor apps.</p>
                        <div class="button wow fadeInLeft" data-wow-delay=".8s">
                            <a href="javascript:void(0)" class="btn"><i class="lni lni-apple"></i> App Store</a>
                            <a href="javascript:void(0)" class="btn btn-alt"><i class="lni lni-play-store"></i> Google
                                Play</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12">
                    <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
                        <img src="assets/images/hero/phone.png" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Start Features Area -->
    <section id="features" class="features section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                         <a href="profile.php" class="links">Profile</a>
                       <a href="loan_history.php" class="links">Loan History</a>
                       <a href="#" class="links active">Settings</a>

                        <h4 class="wow fadeInUp" data-wow-delay=".4s" style="margin-top:8%;">Update Password
                        </h4>
                        <!--<p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem-->
                        <!--    Ipsum available, but the majority have suffered alteration in some form.</p>-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 offset-md-3">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <h5 class="text-danger" style="margin-bottom:2%;"><?php echo $smsg;?></h5>
                        <h5 class="text-success" style="margin-bottom:2%;"><?php echo $msg;?></h5>

                        <form method="POST">
                            
                    <input type="password" class="form-control" placeholder="Password" name="user_password"><br>
                    <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password"><br>
                        <button class="btn btn-primary w-100" type="submit" name="submit" style="background:#000;">Update</button>
                        </form>
                    </div>
                    <!-- End Single Feature -->
                </div>
         
            </div>
        </div>
    </section>
    <!-- End Features Area -->
<?php
include_once('footer.php');
?>
<script>
    function checkPasswordMatch() {
        var password = $("#txtNewPassword").val();
        var confirmPassword = $("#txtConfirmPassword").val();
        if (password != confirmPassword)
            $("#CheckPasswordMatch").html("Passwords does not match!");
        else
            $("#CheckPasswordMatch").html("Passwords match.");
    }
    $(document).ready(function () {
       $("#txtConfirmPassword").keyup(checkPasswordMatch);
    });
</script>


