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
                                                <h4>Purchase of Rawmaterial</h4>
                                            </div>
                                        </div>
                                        
										<div class="col-md-12">
                                            <input type="text" name="pdate" value="<?php echo date("Y-m-d"); ?>">
                                        </div>
										
										
										
										<div class="col-md-12">
                                           <!-- <input type="text" name="nrolls" placeholder="No.of Cloth Rolls">-->
										     <input type="number" max="1000" min="1" name="nrolls" placeholder="No.of Cloth Rolls">
                                        </div>


										<div class="col-md-12">
                                            <!--<input type="text" name="weight" placeholder="Weight">-->
											<input type="number" max="1000" min="1" name="Weight" placeholder="Weight">
                                        </div>
										
                                        
                                        <div class="col-md-12">
                                            <input type="text" name="mcode" placeholder="Material Code">
                                        </div>
										

                                        <div class="col-md-12">
                                            <input type="text" name="scode" placeholder="Supplier Code">
                                        </div>

                                        
                                        
                                        <div class="col-md-12">
                                            <button class="submit-btn mt-20" type="submit" name="submit">Add</button>&nbsp;&nbsp;
											<a href='viewrawmaterial.php'><button class="submit-btn mt-20" type="button">View Rawmaterial</button></a>
											
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
$nrolls=$_POST['nrolls'];
$pdate=$_POST['pdate'];
$weight=$_POST['weight'];
$mcode=$_POST['mcode'];
$scode=$_POST['scode'];


mysql_query("INSERT INTO `nithiya-textiles`.`rawmaterial` (  `nrolls`, `pdate`, `weight`, `mcode`,`scode`) VALUES ( '$nrolls', '$pdate', '$weight', '$mcode','$scode')")or die(mysql_error());

echo "<script type='text/javascript'>alert('Rawmaterial added successfully');</script>";
//echo '<meta http-equiv="refresh" content="0;url=viewrawmaterial.php"/>';
echo '<meta http-equiv="refresh" content="0;url=accessories.php"/>';
}
?>
<?php include "footer.php"; ?>