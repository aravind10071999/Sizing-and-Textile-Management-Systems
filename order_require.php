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
                                                <h4>Order Requirement</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
										<?php
										$oq=mysql_query("select * from order_require");
										$on=mysql_num_rows($oq);
										$on=$on+1;
										?>
                                            <input type="text" name="rcode" placeholder="Requirement Code" value="O<?php echo $on; ?>">
                                        </div>
										
										
										<div class="col-md-12">
                                            <input type="number" max="1000" min="1" name="nrequire" placeholder="Rawmaterial Requirement (in Rolls)">
						                                  
</div>


										<div class="col-md-12">
                                            <input type="text" name="brequire" placeholder="Box Requirement">
                                        </div>
										
                                        
                                        <div class="col-md-12">
                                            <input type="text" name="crequire" placeholder="Cover Requirement">
                                        </div>
										
                                        <div class="col-md-12">
                                            <input type="text" name="ocode" placeholder="Order Code">
                                        </div>
                                        
                                        
                                        <div class="col-md-12">
                                            <button class="submit-btn mt-20" type="submit" name="submit">Add</button>&nbsp;&nbsp;
											<a href='vieworder_require.php'><button class="submit-btn mt-20" type="button">View Order Requirement</button></a>
											
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
$rcode=$_POST['rcode'];
$nrequire=$_POST['nrequire'];
$brequire=$_POST['brequire'];
$crequire=$_POST['crequire'];
$ocode=$_POST['ocode'];

mysql_query("INSERT INTO `nithiya-textiles`.`order_require` (  `rcode`, `nrequire`, `brequire`, `crequire`,`ocode`) VALUES ( '$rcode', '$nrequire', '$brequire', '$crequire','$ocode')")or die(mysql_error());

echo "<script type='text/javascript'>alert('Order Requirement added successfully');</script>";
//echo '<meta http-equiv="refresh" content="0;url=vieworder_require.php"/>';
echo '<meta http-equiv="refresh" content="0;url=rawmaterial.php"/>';
}
?>
<?php include "footer.php"; ?>