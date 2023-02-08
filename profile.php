<?php
session_start();
if(empty($_SESSION['id'])){
    header('location:login.php');
}
include_once('header.php');
include_once('conn.php');
$phone_no = $_SESSION['id'];
 $get_user = "select applicant_name,phone_number,address,uidai_no,email_id from user_tbl where phone_number='$phone_no'";
  $user_q = mysqli_query($conn,$get_user);
  $fetch_user = mysqli_fetch_assoc($user_q);
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
                       <a href="#" class="links active">Profile</a>
                       <a href="loan_history.php" class="links">Loan History</a>
                       <a href="settings.php" class="links">Settings</a>

                        <!--<p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem-->
                        <!--    Ipsum available, but the majority have suffered alteration in some form.</p>-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-md-6 col-12 offset-md-1">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <h5>Personal Details</h5><br>
                    <h6 style="margin-bottom:4px;font-weight:400;">Name - <?php echo $fetch_user['applicant_name'];?></h6>
                    <h6 style="margin-bottom:4px;font-weight:400;">Phone No. - <?php echo $fetch_user['phone_number'];?></h6>
                     <h6 style="margin-bottom:4px;font-weight:400;">Email ID - <?php echo $fetch_user['email_id'];?></h6>
                    <h6 style="margin-bottom:4px;font-weight:400;">Adhaar No. - <?php echo $fetch_user['uidai_no'];?></h6>
                    <h6 style="font-weight:400;">Address - <?php echo $fetch_user['address'];?></h6>
                    </div>
                </div>
            </div>
            
  
    </section>
    <!-- End Features Area -->
<?php
include_once('footer.php');
?>


