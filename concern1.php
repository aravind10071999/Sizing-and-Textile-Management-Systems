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
                                                <h4>Concern Details</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                             <select name="cid"  required>
										 <option value="">Select</option>
										 <?php
										$cq=mysql_query("select * from sconcern");
										while($cr=mysql_fetch_array($cq))
										{
										$cid=$cr['cid'];
										echo "<option value='$cid'>$cid</option>";
										}
										?>
										</select>
                                        </div>
                                        <div class="col-md-12"><br />
                                            <input type="text" name="cname" placeholder="Name">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="caddr" placeholder="Address">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="cphone" placeholder="Phone Number">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="email" name="cemail" placeholder="Email">
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
                                            <button class="submit-btn mt-20" type="submit" name="submit">Add</button>&nbsp;&nbsp;
											<a href='view_sconcern.php'><button class="submit-btn mt-20" type="button">View Sizing Concern</button></a>
											
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
$cname=$_POST['cname'];
$caddr=$_POST['caddr'];
$cphone=$_POST['cphone'];
$cemail=$_POST['cemail'];
$oid=$_POST['oid'];

mysql_query("INSERT INTO `nithiya-textiles`.`sconcern` ( `cid`, `cname`, `caddr`, `cphone`, `cemail`, `oid`) VALUES ( '$cid', '$cname', '$caddr', '$cphone', '$cemail', '$oid')")or die(mysql_error());

echo "<script type='text/javascript'>alert('Concern details added successfully');</script>";
//echo '<meta http-equiv="refresh" content="0;url=view_sconcern.php"/>';
echo '<meta http-equiv="refresh" content="0;url=schemical.php"/>';
}
?>
<?php include "footer.php"; ?>