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
                                                <h4>Chemical Details</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
										<?php
										$cq=mysql_query("select * from schemical");
										$cn=mysql_num_rows($cq);
										$cn=$cn+1;
										?>
                                            <input type="text" name="cid" placeholder="Concern Id" value="C<?php echo $cn; ?>">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="cname" placeholder="Chemical Name">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="ceff" placeholder="Chemical Effect">
                                        </div>
                                        
			<div class="col-md-12">
			<input type="text" name="edate" value="<?php echo date("Y-m-d"); ?>">
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <button class="submit-btn mt-20" type="submit" name="submit">Add</button>&nbsp;&nbsp;
											<a href='view_schemical.php'><button class="submit-btn mt-20" type="button">View Chemical</button></a>
											
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
$ceff=$_POST['ceff'];

$edate=$_POST['edate'];


mysql_query("INSERT INTO `nithiya-textiles`.`schemical` (cid,cname,ceff,edate) VALUES ('$cid','$cname','$ceff','$edate')")or die(mysql_error());

echo "<script type='text/javascript'>alert('Chemical details added successfully');</script>";
//echo '<meta http-equiv="refresh" content="0;url=view_schemical.php"/>';
echo '<meta http-equiv="refresh" content="0;url=supplier.php"/>';
}
?>
<?php include "footer.php"; ?>