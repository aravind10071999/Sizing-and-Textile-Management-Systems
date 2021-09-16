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
                  <h4>Salary Details</h4>
                    </div>
                    </div>
				<div class="col-md-12">
				 <?php
										$cq=mysql_query("select * from esalary");
										$cn=mysql_num_rows($cq);
										$cn=$cn+1;
										?>
										
										
               <input type="text" name="said" placeholder="Salary Id" value="S<?php echo $cn; ?>">
                      </div>
					
					<div class="col-md-12">
               <input type="text" name="amt" placeholder="Amount">
                      </div>
									
			
										                                        
			<div class="col-md-12">
            <input type="text" name="sdate" value="<?php echo date("Y-m-d"); ?>">
                                        </div>



					<div class="col-md-12">
               <input type="text" name="ename" placeholder="Employee Name">
                      </div>
								
										
										
			                           
                                        
                                        <div class="col-md-12">
                                            <button class="submit-btn mt-20" type="submit" name="submit">Add</button>&nbsp;&nbsp;
											<a href='view_esalary.php'><button class="submit-btn mt-20" type="button">View Salary Details</button></a>
											
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
$said=$_POST['said'];
$amt=$_POST['amt'];
$sdate=$_POST['sdate'];
$ename=$_POST['ename'];




mysql_query("INSERT INTO `nithiya-textiles`.`esalary` ( said,amt,sdate,ename) VALUES ( '$said','$amt','$sdate','$ename')")or die(mysql_error());

echo "<script type='text/javascript'>alert('Employee Salary details are added successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_esalary.php"/>';
}
?>
<?php include "footer.php"; ?>