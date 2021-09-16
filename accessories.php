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
                                                <h4>Accessories</h4>
                                            </div>
                                        </div>
										
										 <div class="col-md-12">
										 <?php
										$aq=mysql_query("select * from accessories");
										$an=mysql_num_rows($aq);
										$an=$an+1;
										?>
                                            <input type="text" name="acode" placeholder="Accessories Code"  value="A<?php echo $an; ?>">
                                        </div>
										
										                                        
										<div class="col-md-12">
                                            <input type="text" name="pdate" value="<?php echo date("Y-m-d"); ?>">
                                        </div>
										
										
										
										<div class="col-md-12">
                                            <!--<input type="text" name="nbox" placeholder="No.of boxes">-->
											<input type="number" max="1000" min="1" name="nbox" placeholder="No.of boxes">
                                        </div>


										<div class="col-md-12">
                                            <!--<input type="text" name="ncover" placeholder="No.of Covers">-->
											<input type="number" max="1000" min="1" name="ncover" placeholder="No.of Covers">
                                        </div>
										

                                        <div class="col-md-12">
                                            <input type="text" name="scode" placeholder="Supplier Code">
                                        </div>

                                        <div class="col-md-12">
                                            <!--<input type="text" name="cost" placeholder="Cost">-->
											<input type="number" max="5000000" min="1" name="cost" placeholder="Cost">
                                        </div>
                                        
                                        
                                        <div class="col-md-12">
                                            <button class="submit-btn mt-20" type="submit" name="submit">Add</button>&nbsp;&nbsp;
											<a href='viewaccessories.php'><button class="submit-btn mt-20" type="button">View Accessories</button></a>
											
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
$pdate=$_POST['pdate'];
$nbox=$_POST['nbox'];
$ncover=$_POST['ncover'];
$scode=$_POST['scode'];
$cost=$_POST['cost'];



mysql_query("INSERT INTO `nithiya-textiles`.`accessories` (  `acode`, `pdate`, `nbox`, `ncover`,`scode`,`cost`) VALUES ( '$acode', '$pdate', '$nbox', '$ncover','$scode','$cost')")or die(mysql_error());

echo "<script type='text/javascript'>alert('Accessories added successfully');</script>";
//echo '<meta http-equiv="refresh" content="0;url=viewaccessories.php"/>';
echo '<meta http-equiv="refresh" content="0;url=phase.php"/>';
}
?>
<?php include "footer.php"; ?>