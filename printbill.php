<?php include "header1.php"; ?>
<div class="about-us-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="about-page-cntent">
                                <div class="message-box box-shadow white-bg">

                                    <div class="row">
                                        
                                        <div class="col-md-12">
										 <?php
			  $bid=$_GET['bid'];
			   $con=mysql_query("select * from billing where bid='$bid'")or die(mysql_error());
			   while($row=mysql_fetch_array($con))
			   {
			   $bid=$row['bid'];
			   $bilid=$row['bilid'];
			   $date=$row['date'];
			   $cname=$row['cname'];
$ccode=$row['ccode'];
$oid=$row['oid'];
$totamt=$row['totamt'];
$totamt1=$row['totamt1'];
$rrolls=$row['rrolls'];
$acost=$row['acost'];
$pcost=$row['pcost'];
$tcost=$row['tcost'];
?>
                                       <table align="left" cellpadding="20" cellspacing="0" border="1" width="100%" style="margin-bottom:30px" class="table-data-sheet table-bordered">
			  <tr><td colspan="2" align="center"><img src="images/logo/logo.png" /></td></tr>
			  <tr>
			  <td width="30%">Billing Id</td><?php echo "<td>$bilid</td>"; ?> </tr>
			  <tr><td>Date</td><?php echo "<td>$date</td>"; ?></tr>
			  <tr><td>Concern Name</td><?php echo "<td>$cname</td>"; ?></tr>
			  <tr><td>Concern Code</td><?php echo "<td>$ccode</td>"; ?></tr>
			  <tr><td>Order Id</td><?php echo "<td>$oid</td>"; ?></tr>

			  <tr><td>Raw Materials rolls</td><?php echo "<td>$rrolls</td>"; ?></tr>
			  <tr><td>Accessories Cost</td><?php echo "<td>$acost</td>"; ?></tr>
			  <tr><td>Phase Cost</td><?php echo "<td>$pcost</td>"; ?></tr>
			  <tr><td>Transport Cost</td><?php echo "<td>$tcost</td>"; ?></tr>
			  <tr><td>Total Amount</td><?php echo "<td>$totamt1</td>"; ?></tr>
			  <tr><td>CGST</td><?php echo "<td>12</td>"; ?></tr>
			  <tr><td>SGST</td><?php echo "<td>12</td>"; ?></tr>
			  <tr><td>Total with Tax</td><?php echo "<td>$totamt</td>"; ?>
			  </tr>
			 
			  <?php
			  
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
