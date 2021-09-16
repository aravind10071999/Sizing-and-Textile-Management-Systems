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
                                            <input type="text" name="acode" placeholder="Wastage Code">
                                        </div>
										
										<div class="col-md-12">
                                            <input type="text" name="pname" placeholder="Phase name">
                                        </div>

										                                        
										
                                        <div class="col-md-12">
                                            <input type="text" name="ocode" placeholder="Order Code">
                                        </div>

                                        <div class="col-md-12">
                                            <input type="text" name="cost" placeholder="Amount">
                                        </div>
                                        
                                        
                                        <div class="col-md-12">
                                            <button class="submit-btn mt-20" type="submit" name="submit">Add</button>&nbsp;&nbsp;
											<a href='view_swaste.php'><button class="submit-btn mt-20" type="button">View Wastage</button></a>
											
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



mysql_query("INSERT INTO `nithiya-textiles`.`swaste` (  `acode`, `ocode`,  `pname`,`cost`) VALUES ( '$acode', '$ocode', '$pname','$cost')")or die(mysql_error());

echo "<script type='text/javascript'>alert('Wastage added successfully');</script>";
//echo '<meta http-equiv="refresh" content="0;url=view_swaste.php"/>';
echo '<meta http-equiv="refresh" content="0;url=swarehouse.php"/>';
}
?>
<?php include "footer.php"; ?>