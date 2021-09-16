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
                                                <h4>Order Recieving</h4>
                                            </div>
                                        </div>
										<div class="col-md-12">
										<?php
										$oq=mysql_query("select * from order_recieve");
										$on=mysql_num_rows($oq);
										$on=$on+1;
										?>
                                            <input type="text" name="oid" placeholder="Order Id" value="O<?php echo $on; ?>">
                                        </div>
										
                                        <div class="col-md-12">
                                           <!-- <input type="text" name="otype" placeholder="Type">-->
											<select name="otype" >
											  <option value="Boxes">Boxes</option>
											  <option value="rolls">rolls</option>
											  <option value="covers">covers</option>
											</select>
                                        </div><br><br>
										
										
                                        <div class="col-md-12"><br>
                                            <input type="text" name="odate" placeholder="Date" value="<?php echo date("Y-m-d"); ?>">
                                        </div>
                                        <div class="col-md-12">
                                           <!-- <input type="text" name="ngoods" placeholder="No.of Goods">-->
										    <input type="number" max="1000" min="1" name="ngooods"  placeholder="No.of Goods">
                                        </div>
                                       <!-- <div class="col-md-12">
                                           <!-- <input type="text" name="oconfirm" placeholder="Confirmation">
										   <select name="oconfirm" >
											  <option value="yes">Yes</option>
											  <option value="Pending">Pending</option>
											 </select>
                                        </div>-->
                                         <div class="col-md-12">
										 <select name="cid"  required>
										 <option value="">Select</option>
										 <?php
										$cq=mysql_query("select * from concern");
										while($cr=mysql_fetch_array($cq))
										{
										$cid=$cr['cid'];
										echo "<option value='$cid'>$cid</option>";
										}
										?>
										</select>
                                            
                                        </div>
                                        
                                        
                                        <div class="col-md-12">
                                            <button class="submit-btn mt-20" type="submit" name="submit">Add</button>&nbsp;&nbsp;
											<a href='vieworder.php'><button class="submit-btn mt-20" type="button">View Order</button></a>
											
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
$cid=$_POST['cid'];
$otype=$_POST['otype'];
$odate=$_POST['odate'];
$ngoods=$_POST['ngoods'];
$oconfirm=$_POST['oconfirm'];
$oid=$_POST['oid'];

mysql_query("INSERT INTO `nithiya-textiles`.`order_recieve` ( `cid`, `otype`, `odate`, `ngoods`, `oconfirm`, `oid`) VALUES ( '$cid', '$otype', '$odate', '$ngoods', '$oconfirm', '$oid')")or die(mysql_error());

echo "<script type='text/javascript'>alert('Order Recieving details added successfully');</script>";
//echo '<meta http-equiv="refresh" content="0;url=vieworder.php"/>';
echo '<meta http-equiv="refresh" content="0;url=sgoods.php"/>';
}
?>
<?php include "footer.php"; ?>