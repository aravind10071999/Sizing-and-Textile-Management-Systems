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
                  <h4>Employee Attendance Details</h4>
                    </div>
                    </div>
				<div class="col-md-12">
				 <?php
										$cq=mysql_query("select * from eattendance");
										$cn=mysql_num_rows($cq);
										$cn=$cn+1;
										?>
										
               <input type="text" name="emid" placeholder="Employee Id" value="E<?php echo $cn; ?>">
                      </div>
										
			
			<div class="col-md-12">
               <input type="text" name="ename" placeholder="Employee Name">
                      </div>
					  
					  
					  <div class="col-md-12"><br>
					  
					  <select name="mon" placeholder="Select Month" >
  <option value="select month">Select Month</option>
  <option value="january">January</option>
  <option value="february">February</option>
  <option value="march">march</option>
  <option value="april">april</option>
  <option value="may">may</option>
  <option value="june">june</option>
  <option value="july">july</option>
  <option value="august">august</option>
  <option value="september">september</option>
  <option value="actober">actober</option>
  <option value="november">november</option>
  <option value="december">december</option>
  
  </select>

					  
                                        </div>
			
					  
					  
					  
					  <div class="col-md-12"><br>
            <input type="text" name="date" value="<?php echo date("Y-m-d"); ?>">
                                        </div>
			
					  
				
			<div class="col-md-12">
               <input type="text" name="itime" placeholder="In Time">
                      </div>
				<div class="col-md-12">
               <input type="text" name="otime" placeholder="Out Time">
                      </div>
				
			
										                                        
										
										<div class="col-md-12">
               <input type="text" name="pno" placeholder="Phone Number">
                      </div>
				
				<div class="col-md-12">
               <input type="text" name="email" placeholder="Email Id">
                      </div>
				


<div class="col-md-12">
               <input type="text" name="adrs" placeholder="Address">
                         </div>

							
										
										
			                           
                                        
                                        <div class="col-md-12">
                                            <button class="submit-btn mt-20" type="submit" name="submit">Add</button>&nbsp;&nbsp;
											<a href='view_eattendance.php'><button class="submit-btn mt-20" type="button">View Attendance Details</button></a>
											
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
$emid=$_POST['emid'];
$ename=$_POST['ename'];
$mon=$_POST['mon'];
$date=$_POST['date'];
$itime=$_POST['itime'];
$otime=$_POST['otime'];
$pno=$_POST['pno'];
$email=$_POST['email'];
$adrs=$_POST['adrs'];



mysql_query("INSERT INTO `nithiya-textiles`.`eattendance` ( emid,ename,mon,date,itime,otime,pno,email,adrs) VALUES ( '$emid','$ename','$mon','$date','$itime','$otime','$pno','$email','$adrs')")or die(mysql_error());

echo "<script type='text/javascript'>alert('Employee Attendance  details added successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_eattendance.php"/>';
}
?>
<?php include "footer.php"; ?>