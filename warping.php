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
                                                <h4>Warping Process</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
										<?php
										$cq=mysql_query("select * from warping");
										$cn=mysql_num_rows($cq);
										$cn=$cn+1;
										?>
                                            <input type="text" name="wid" placeholder="Warping Id" value="W<?php echo $cn; ?>">
                                        </div>
                                        <div class="col-md-12"><br>
                                            
											
											<!--<input type="text" name="wtype" placeholder="Warping Type">-->
											<select name="wtype" >
											  <option value="level1">level 1</option>
											  <option value="level2">level 2</option>
                                        <option value="level2">level3</option>
										</select>
										</div>

										
                                        <div class="col-md-12"><br>
                                            <!--<input type="text" name="mname" placeholder="Machine Name">-->
                                        <select name="mname" >
											  
											  <option value="sp">Mac 1</option>
											  <option value="dp">Mac 2</option>
										</select>
										</div>
                                        <div class="col-md-12"><br>
                                           <!-- <input type="text" name="process" placeholder="Process">-->
										   <select name="Process" >
											  <option value="l">SINGLE PROCESS</option>
											  <option value="le">DOUBLE PROCESS</option>
											</select>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <button class="submit-btn mt-20" type="submit" name="submit">Add</button>&nbsp;&nbsp;
											<a href='view_warping.php'><button class="submit-btn mt-20" type="button">View Warping Details</button></a>
											
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
$wid=$_POST['wid'];
$wtype=$_POST['wtype'];
$mname=$_POST['mname'];
$process=$_POST['process'];

mysql_query("INSERT INTO `nithiya-textiles`.`warping` (wid,wtype,mname,process) VALUES ('$wid','$wtype','$mname','$process')")or die(mysql_error());

echo "<script type='text/javascript'>alert('Warping details added successfully');</script>";
//echo '<meta http-equiv="refresh" content="0;url=view_warping.php"/>';
echo '<meta http-equiv="refresh" content="0;url=sfgoods.php"/>';
}
?>
<?php include "footer.php"; ?>