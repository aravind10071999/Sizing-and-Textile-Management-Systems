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
                                                <h4>Meterial Recieving</h4>
                                            </div>
                                        </div>
										<div class="col-md-12">
										<?php
										$mq=mysql_query("select * from material");
										$mn=mysql_num_rows($mq);
										$mn=$mn+1;
										?>
                                            <input type="text" name="mid" placeholder="Concern Id" value="M<?php echo $mn; ?>">
											
                                        </div>
										
                                        <div class="col-md-12">
                                           <!-- <input type="text" name="mtype" placeholder="Material Type">-->
                                        <select name="mtype" ><br>
											  <option value="cotton">cotton</option>
											  <option value="Threads">Threads</option>
									
											</select>
										</div>
                                        <div class="col-md-12"><br>
                                            <input type="text" name="odate" placeholder="Date" value="<?php echo date("Y-m-d"); ?>">
                                        </div>
                                        <div class="col-md-12">
                                           
										<!--   <input type="text" name="ngoods" placeholder="No.of Goods">-->
                                        <input type="number" max="100000" min="1" name="ngoods" placeholder="No.of Goods">
										</div>
                                        <div class="col-md-12">
                                            <!--<input type="text" name="oconfirm" placeholder="Confirmation">-->
                                        </div>
                                         <div class="col-md-12">
                                            <input type="text" name="cid" placeholder="Concern Id">
                                        </div>
                                        
                                        
                                        <div class="col-md-12">
                                            <button class="submit-btn mt-20" type="submit" name="submit">Add</button>&nbsp;&nbsp;
											<a href='vieworder.php'><button class="submit-btn mt-20" type="button">View Material</button></a>
											
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
$mid=$_POST['mid'];
$mtype=$_POST['mtype'];
$odate=$_POST['odate'];
$ngoods=$_POST['ngoods'];
$oconfirm=$_POST['oconfirm'];
$cid=$_POST['cid'];

mysql_query("INSERT INTO `nithiya-textiles`.`material` ( `mid`, `mtype`, `odate`, `ngoods`, `oconfirm`, `cid`) VALUES ( '$mid', '$mtype', '$odate', '$ngoods', '$oconfirm', '$cid')")or die(mysql_error());

echo "<script type='text/javascript'>alert('Material Recieving details added successfully');</script>";
//echo '<meta http-equiv="refresh" content="0;url=viewmaterial.php"/>';
echo '<meta http-equiv="refresh" content="0;url=concern1.php"/>';
}
?>
<?php include "footer.php"; ?>