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
                                                <h4>Sample Goods</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
										<?php
										$sq=mysql_query("select * from sgoods");
										$sn=mysql_num_rows($sq);
										$sn=$sn+1;
										?>
                                            <input type="text" name="scode" placeholder="Sample Code" value="S<?php echo $sn; ?>">
                                        </div>
										
										<div class="col-md-12">
                                            <input type="text" name="odate" placeholder="Date" value="<?php echo date("Y-m-d"); ?>">
                                        </div>
										
										<div class="col-md-12">
                                            <!--<input type="text" name="nsent" placeholder="No.of Sample Sent">-->
											  <input type="number" max="1000" min="1" name="nsent"  placeholder="No.of Sample sent">
                                        </div>


										<div class="col-md-12">
										
										 <select name="oid"  required>
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
										
                                        
                                        <div class="col-md-12"><br>
                                            <input type="text" name="mcode" placeholder="Material Code">
                                        </div>
										
                                        <div class="col-md-12">
                                            <input type="text" name="dcode" placeholder="Design Code">
                                        </div>

                                        <div class="col-md-12">
                                            <input type="text" name="szcode" placeholder="Size Code">
                                        </div>

                                        
                                        
                                        <div class="col-md-12">
                                            <button class="submit-btn mt-20" type="submit" name="submit">Add</button>&nbsp;&nbsp;
											<a href='viewsgoods.php'><button class="submit-btn mt-20" type="button">View Sample</button></a>
											
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
$scode=$_POST['scode'];
$odate=$_POST['odate'];
$nsent=$_POST['nsent'];
$mcode=$_POST['mcode'];
$dcode=$_POST['dcode'];
$szcode=$_POST['szcode'];
$oid=$_POST['oid'];

mysql_query("INSERT INTO `nithiya-textiles`.`sgoods` (  `scode`, `odate`, `nsent`, `mcode`,`dcode`,`szcode`, `oid`) VALUES ( '$scode', '$odate', '$nsent', '$mcode','$dcode','$szcode', '$oid')")or die(mysql_error());

echo "<script type='text/javascript'>alert('Sample Goods added successfully');</script>";
//echo '<meta http-equiv="refresh" content="0;url=viewsgoods.php"/>';
echo '<meta http-equiv="refresh" content="0;url=order_require.php"/>';
}
?>
<?php include "footer.php"; ?>