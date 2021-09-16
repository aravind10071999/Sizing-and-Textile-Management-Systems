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
                                                <h4>Supplier Details</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
										<?php
										$cq=mysql_query("select * from supplier");
										$cn=mysql_num_rows($cq);
										$cn=$cn+1;
										?>
                                            <input type="text" name="sid" placeholder="Concern Id" value="S<?php echo $cn; ?>">
											
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="sname" placeholder="Supplier Name">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="saddr" placeholder="Supplier Address">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="sphone" placeholder="Phone Number">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="email" name="semail" placeholder="Email">
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <button class="submit-btn mt-20" type="submit" name="submit">Add</button>&nbsp;&nbsp;
											<a href='view_supplier.php'><button class="submit-btn mt-20" type="button">View Supplier Details</button></a>
											
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
$sid=$_POST['sid'];
$sname=$_POST['sname'];
$saddr=$_POST['saddr'];
$sphone=$_POST['sphone'];
$semail=$_POST['semail'];


mysql_query("INSERT INTO `nithiya-textiles`.`supplier` ( `sid`, `sname`, `saddr`, `sphone`, `semail`) VALUES ( '$sid', '$sname', '$saddr', '$sphone', '$semail')")or die(mysql_error());

echo "<script type='text/javascript'>alert('Supplier details added successfully');</script>";
//echo '<meta http-equiv="refresh" content="0;url=view_supplier.php"/>';
echo '<meta http-equiv="refresh" content="0;url=warping.php"/>';
}
?>
<?php include "footer.php"; ?>