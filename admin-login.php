<?php include "header.php"; ?>
<div class="about-us-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="about-page-cntent">
                                <div class="message-box box-shadow white-bg">
                                <form id="contact-form" action="" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="section-title text-uppercase mb-40">
                                                <h4>Admin Login</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="uname" placeholder="Username">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="password" name="upass" placeholder="Password">
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <button class="submit-btn mt-20" type="submit" name="submit">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    
                </div>
            </div>
<?php
if(isset($_POST['submit']))
{
$uname=$_POST['uname'];
$upass=$_POST['upass'];


if(($uname=='admin')&&($upass=='admin'))
{
$_SESSION['aid']='1';
echo "<script type='text/javascript'>alert('Admin Logged in successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=dashboard.php"/>';
}
}
?>
<?php include "footer.php"; ?>