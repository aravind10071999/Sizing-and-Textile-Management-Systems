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
                  <h4>Billing Details</h4>
				  
                    </div>
                    </div>
				<div class="col-md-12">
               <input type="text" name="bilid" placeholder="Billing Id">
                      </div>
										
		
										                                        
			<div class="col-md-12">
               <input type="text" name="date" value="<?php echo date("Y-m-d"); ?>">
                         </div>


<div class="col-md-12">
               <input type="text" name="cname" placeholder="Concern Name">
                         </div>
						 
<div class="col-md-12">
               <input type="text" name="ccode" placeholder="Concern Code">
                         </div>
<div class="col-md-12">
               <input type="text" name="oid" placeholder="Order Id">
                         </div>

<div class="col-md-12">
               <input type="text" name="totamt" placeholder="Total Amount">
                         </div>


 <div class="col-md-12">
                     
 <button class="submit-btn mt-20" type="submit" name="submit">Add</button>&nbsp;&nbsp;
											
<a href='view_sbill.php'><button class="submit-btn mt-20" type="button">View Billing Details</button></a>
											
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
$bilid=$_POST['bilid'];
$date=$_POST['date'];
$cname=$_POST['cname'];
$ccode=$_POST['ccode'];
$oid=$_POST['oid'];
$totamt=$_POST['totamt'];



mysql_query("INSERT INTO `nithiya-textiles`.`sbilling` ( bilid,date,cname,ccode,oid,totamt) VALUES ( '$bilid','$date','$cname','$ccode','$oid','$totamt')")or die(mysql_error());

echo "<script type='text/javascript'>alert('Billing  details added successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_sbill.php"/>';
}
?>
<?php include "footer.php"; ?>