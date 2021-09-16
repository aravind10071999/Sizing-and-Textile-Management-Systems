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
                                                <h4>Concern Entry</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
										<?php
										$cq=mysql_query("select * from concern");
										$cn=mysql_num_rows($cq);
										$cn=$cn+1;
										?>
                                            <input type="text" name="cid" placeholder="Concern Id" value="C<?php echo $cn; ?>">
                                        </div>
                                        <div class="col-md-12">
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
                                            <input type="text" name="oid" placeholder="Order Id">
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <button class="submit-btn mt-20" type="submit" name="submit">Add</button>&nbsp;&nbsp;
											<a href='viewconcern.php'><button class="submit-btn mt-20" type="button">View Concern</button></a>
											
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

mysql_query("INSERT INTO `nithiya-textiles`.`concern` ( `cid`, `cname`, `caddr`, `cphone`, `cemail`, `oid`) VALUES ( '$cid', '$cname', '$caddr', '$cphone', '$cemail', '$oid')")or die(mysql_error());

echo "<script type='text/javascript'>alert('Concern details added successfully');</script>";
//echo '<meta http-equiv="refresh" content="0;url=viewconcern.php"/>';
echo '<meta http-equiv="refresh" content="0;url=order.php"/>';
}
?>
<?php include "footer.php"; ?>