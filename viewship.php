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
                                  <h4>view shipment</h4>
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                       <table align="left" cellpadding="20" cellspacing="0" border="1" width="100%" style="margin-bottom:30px" class="table-data-sheet table-bordered">
			  <tr>
			  <td>Shipment Id</td>
			  <td>Shipment Name</td>
			  <td>Date Of Departure</td>
			  <td>Date Of Reach</td>
			  <td>Cost</td>
			  <td>Action</td>
			  </tr>
			  <?php
			   $con=mysql_query("select * from shipment")or die(mysql_error());
			   while($row=mysql_fetch_array($con))
			   {
			   $sid=$row['sid'];
			   $shid=$row['shid'];
			   $sname=$row['sname'];
$ddate=$row['ddate'];
$dor=$row['dor'];
$cost=$row['cost'];
			   echo "<tr>
			   <td>$shid</td>
			   <td>$sname</td>
			   <td>$ddate</td>
			   <td>$dor</td>
			   <td>$cost</td>
			   <td><a href='viewship.php?sid=$sid' class='button extra-small mb-20'><span>Delete</span></a></td></tr>";
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
if($_GET['sid']!='')
{
$sid=$_GET['sid'];
mysql_query("delete from shipment where sid='$sid'");
echo "<script type='text/javascript'>alert('Shipment details deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=viewship.php">';
}
 include "footer.php"; ?>