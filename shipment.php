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
                  <h4>Shipment</h4>
                    </div>
                    </div>
				<div class="col-md-12">
               <input type="text" name="shid" placeholder="Shipment Id">
                      </div>
										
			<div class="col-md-12">
               <input type="text" name="sname" placeholder="Shipment Name">
                         </div>

										                                        
			<div class="col-md-12">
               <input type="text" name="ddate" value="<?php echo date("Y-m-d"); ?>">
                         </div>


<div class="col-md-12">
               <input type="text" name="dor" value="<?php echo date("Y-m-d"); ?>">
                         </div>

<div class="col-md-12">
               <input type="text" name="cost" placeholder="Cost">
                         </div>
							
										
										
			                           
                                        
                                        <div class="col-md-12">
                                            <button class="submit-btn mt-20" type="submit" name="submit">Add</button>&nbsp;&nbsp;
											<a href='viewship.php'><button class="submit-btn mt-20" type="button">View Data</button></a>
											
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
$shid=$_POST['shid'];
$sname=$_POST['sname'];
$ddate=$_POST['ddate'];
$dor=$_POST['dor'];
$cost=$_POST['cost'];



mysql_query("INSERT INTO `nithiya-textiles`.`shipment` ( shid,sname, ddate,dor,cost) VALUES ( '$shid','$sname','$ddate','$dor','$cost')")or die(mysql_error());

echo "<script type='text/javascript'>alert('Shipment details added successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=viewship.php"/>';
}
?>
<?php include "footer.php"; ?>