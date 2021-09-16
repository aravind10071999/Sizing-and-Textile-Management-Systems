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
                  <h4>Delivery</h4>
                    </div>
                    </div>
				<div class="col-md-12">
               <input type="text" name="deid" placeholder="Delivery Id">
                      </div>
										
			
										                                        
			<div class="col-md-12">
            <input type="text" name="date" value="<?php echo date("Y-m-d"); ?>">
                                        </div>


<div class="col-md-12">
               <input type="text" name="loc" placeholder="Location">
                         </div>

							
										
										
			                           
                                        
                                        <div class="col-md-12">
                                            <button class="submit-btn mt-20" type="submit" name="submit">Add</button>&nbsp;&nbsp;
											<a href='viewdelivery.php'><button class="submit-btn mt-20" type="button">View Data</button></a>
											
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
$deid=$_POST['deid'];
$date=$_POST['date'];
$loc=$_POST['loc'];




mysql_query("INSERT INTO `nithiya-textiles`.`delivery` ( deid,date,loc) VALUES ( '$deid','$date','$loc')")or die(mysql_error());

echo "<script type='text/javascript'>alert('Delivery details added successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=viewdelivery.php"/>';
}
?>
<?php include "footer.php"; ?>