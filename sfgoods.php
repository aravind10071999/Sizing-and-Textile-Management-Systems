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
                                                <h4> Finished Goods</h4>
                                            </div>
                                        </div>
										
										 <div class="col-md-12">
                                            <input type="text" name="npieces" placeholder="No.of Pieces">
                                        </div>
										
										<div class="col-md-12">
                                            <input type="text" name="fdate" value='<?php echo date("Y-m-d"); ?>'>
                                        </div>

                             
										
                                        <div class="col-md-12">
                                            <input type="text" name="auseage" placeholder="Accessories useage">
                                        </div>


                                        
                                        
                                        <div class="col-md-12">
                                            <button class="submit-btn mt-20" type="submit" name="submit">Add</button>&nbsp;&nbsp;
											<a href='viewfgoods.php'><button class="submit-btn mt-20" type="button">View Finished Goods</button></a>
											
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
$npieces=$_POST['npieces'];
$fdate=$_POST['fdate'];
$auseage=$_POST['auseage'];



mysql_query("INSERT INTO `nithiya-textiles`.`sfgoods` (  `npieces`, `fdate`,  `auseage`) VALUES ( '$npieces', '$fdate', '$auseage')")or die(mysql_error());

echo "<script type='text/javascript'>alert('Finished Goods added successfully');</script>";
//echo '<meta http-equiv="refresh" content="0;url=sfgoods.php"/>';
echo '<meta http-equiv="refresh" content="0;url=swaste.php"/>';
}
?>
<?php include "footer.php"; ?>