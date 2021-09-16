<?php include "header.php"; ?>
<div class="about-us-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="about-page-cntent">
                                <div class="message-box box-shadow white-bg">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="section-title text-uppercase mb-40">
                                  <h4>view Employee Attendance Details</h4>
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                       <table align="left" cellpadding="20" cellspacing="0" border="1" width="100%" style="margin-bottom:30px" class="table-data-sheet table-bordered">
			  <tr>
			  <td>Employee Id</td>
			  <td>Employee Name</td>
			  <td>Month</td>
			  <td>Date</td>
			  <td>In Time</td>
			  <td>Out Time</td>
			  <td>Phone Number</td>
			  <td>Email Id</td>
			  <td>Address</td>
			  <td>Action</td>
			  </tr>
			  <?php
			   $con=mysql_query("select * from eattendance")or die(mysql_error());
			   while($row=mysql_fetch_array($con))
			   {
			   $eid=$row['eid'];
			   $emid=$row['emid'];
			   $ename=$row['ename'];
			   $mon=$row['mon'];
			   $date=$row['date'];
			   $itime=$row['itime'];
			   $otime=$row['otime'];
			   $pno=$row['pno'];
			   $email=$row['email'];
			   $adrs=$row['adrs'];
			   
			   echo "<tr>
			   <td>$emid</td>
			   <td>$ename</td>
			   <td>$mon</td>
			   
			   <td>$date</td>
			   
			   <td>$itime</td>
			   <td>$otime</td>
			   <td>$pno</td>
			   <td>$email</td>
			   <td>$adrs</td>
			   <td><a href='view_eattendance.php?eid=$eid' class='button extra-small mb-20'><span>Delete</span></a></td></tr>";
			   }
			   ?>
			  </table>
                                       
									   </div>

                            </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    
                </div>
            </div>

<?php
if($_GET['eid']!='')
{
$did=$_GET['eid'];
mysql_query("delete from eattendance where eid='$eid'");
echo "<script type='text/javascript'>alert('Employee Attendance details deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_eattendance.php">';
}
 include "footer.php"; ?>