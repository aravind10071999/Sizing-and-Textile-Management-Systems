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
                                                <h4>Warehouse Details</h4>
                                            </div>
                                        </div>
										
										 <div class="col-md-12">
										 <?php
										$cq=mysql_query("select * from swarehouse");
										$cn=mysql_num_rows($cq);
										$cn=$cn+1;
										?>
                                            <input type="text" name="wcode" placeholder="Warping Id" value="W<?php echo $cn; ?>">
											
                                          
                                        </div>
										
										<div class="col-md-12">
                                            <input type="text" name="wname" placeholder="Warehouse Name">
                                        </div>

										                                        
										
                                        <div class="col-md-12">
                                            <input type="text" name="adrs" placeholder="Address">
                                        </div>

                                        <div class="col-md-12">
                                            <input type="text" name="pno" placeholder="Phone Number">
                                        </div>
										
	 <div class="col-md-12">
               <input type="text" name="email" placeholder="Email Id">
                                        </div>
										
	 <div class="col-md-12">
                                            <input type="text" name="ncon" placeholder="Number Of Containers">
                                        </div>
										
										 <div class="col-md-12">
                                            <input type="text" name="conno" placeholder="Container Number">
                                        </div>
										
										 <div class="col-md-12">
                                            <input type="text" name="adate" value="<?php echo date("Y-m-d"); ?>">
                                        </div>
										
										 <div class="col-md-12">
                                            <input type="text" name="cost" placeholder="Cost">
                                        </div>
										
										
                                        
                                        
                                        <div class="col-md-12">
                                            <button class="submit-btn mt-20" type="submit" name="submit">Add</button>&nbsp;&nbsp;
											<a href='view_warehouse.php'><button class="submit-btn mt-20" type="button">View Warehouse</button></a>
											
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
$wcode=$_POST['wcode'];
$wname=$_POST['wname'];
$adrs=$_POST['adrs'];
$pno=$_POST['pno'];
$email=$_POST['email'];
$ncon=$_POST['ncon'];
$conno=$_POST['conno'];
$adate=$_POST['adate'];
$cost=$_POST['cost'];




mysql_query("INSERT INTO `nithiya-textiles`.`swarehouse` (wcode,wname,adrs,pno,email,ncon,conno,adate,cost) VALUES ( '$wcode', '$wname', '$adrs','$pno','$email','$ncon','$conno','$adate','$cost')")or die(mysql_error());

echo "<script type='text/javascript'>alert('Warehouse details are added successfully');</script>";
//echo '<meta http-equiv="refresh" content="0;url=view_warehouse.php"/>';
echo '<meta http-equiv="refresh" content="0;url=sdelivery.php"/>';
}
?>
<?php include "footer.php"; ?>