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
                                                <h4>Wastage</h4>
                                            </div>
                                        </div>
										
										 <div class="col-md-12">
										  <?php
										$wq=mysql_query("select * from wastage");
										$wn=mysql_num_rows($wq);
										$wn=$wn+1;
										?>
										
                                            <input type="text" name="acode" placeholder="Wastage Code" value="W<?php echo $wn; ?>">
                                        </div>
										
										<div class="col-md-12">
                                            <!--<input type="text" name="pname" placeholder="Phase name">-->
											<select name="pname" ><br>
											  <option value="PN1">PN1</option>
											  <option value="PN2">PN2</option>
											  <option value="PN3">PN3</option>
											</select>
                                        </div>
										
										 <div class="col-md-12"><br>
										<select name="ocode"  required>
										 <option value="">Select</option>
										 <?php
										$oq=mysql_query("select * from order_recieve");
										while($or=mysql_fetch_array($oq))
										{
										$oid=$or['oid'];
										echo "<option value='$oid'>$oid</option>";
										}
										?>
										</select>
                                        </div>



                                        <div class="col-md-12">
                                           <!-- <input type="text" name="cost" placeholder="Amount">-->
										   
                                        </div>
                                        
                                        
                                        <div class="col-md-12">
                                            <button class="submit-btn mt-20" type="submit" name="submit">Add</button>&nbsp;&nbsp;
											<a href='view_wastage.php'><button class="submit-btn mt-20" type="button">View Wastage</button></a>
											
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
$acode=$_POST['acode'];
$ocode=$_POST['ocode'];
$pname=$_POST['pname'];
$cost=$_POST['cost'];



mysql_query("INSERT INTO `nithiya-textiles`.`wastage` (  `acode`, `ocode`,  `pname`,`cost`) VALUES ( '$acode', '$ocode', '$pname','$cost')")or die(mysql_error());

echo "<script type='text/javascript'>alert('Wastage added successfully');</script>";
//echo '<meta http-equiv="refresh" content="0;url=view_wastage.php"/>';
echo '<meta http-equiv="refresh" content="0;url=fgoods.php"/>';
}
?>
<?php include "footer.php"; ?>