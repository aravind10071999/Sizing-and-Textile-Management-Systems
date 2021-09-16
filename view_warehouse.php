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
                                                <h4>View Warehouse Details</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                       <table align="left" cellpadding="20" cellspacing="0" border="1" width="100%" style="margin-bottom:30px" class="table-data-sheet table-bordered">
			  <tr>
			  <td>Warehouse Code</td>
			  <td>Warehouse Name</td>
			  <td>Address</td>
			  <td>Phone Number</td>
			  <td>Email</td>
			  <td>Number Of Containers</td>
			  <td>Container Number</td>
			  <td>Arrival Date</td>
			  <td>Cost</td>
			  <td>Action</td>
			  </tr>
			  <?php
			   $con=mysql_query("select * from swarehouse")or die(mysql_error());
			   while($row=mysql_fetch_array($con))
			   {
			   $wid=$row['wid'];
			   $wcode=$row['wcode'];
			  $wname=$row['wname'];
			  $adrs=$row['adrs'];
			  $pno=$row['pno'];
			  $email=$row['email'];
			  $ncon=$row['ncon'];
			  $conno=$row['conno'];
			  
$adate=$row['adate'];
$cost=$row['cost'];
	   echo "<tr>
	   <td>$wcode</td>
	   <td>$wname</td>
	   <td>$adrs</td>
	   <td>$pno</td>
	   <td>$email</td>
	   <td>$ncon</td>
	   <td>$conno</td>
	   <td>$adate</td>
	   <td>$cost</td>
	   
	   <td><a href='view_warehouse.php?wid=$wid' class='button extra-small mb-20'><span>Delete</span></a></td></tr>";
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
if($_GET['wid']!='')
{
$wid=$_GET['wid'];
mysql_query("delete from swarehouse where wid='$wid'");
echo "<script type='text/javascript'>alert('Warehouse details are deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_warehouse.php">';
}
 include "footer.php"; ?>