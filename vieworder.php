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
                                                <h4>View Concern Entry</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                       <table align="left" cellpadding="20" cellspacing="0" border="1" width="100%" style="margin-bottom:30px" class="table-data-sheet table-bordered">
			  <tr><td>Concern Id</td><td>Type</td><td>Date</td><td>No.of Goods</td><td>Confirmation</td><td>Order Id</td><td>Action</td></tr>
			  <?php
			   $con=mysql_query("select * from order_recieve")or die(mysql_error());
			   while($row=mysql_fetch_array($con))
			   {
			   $cid=$row['cid'];
			   $orid=$row['orid'];
$otype=$row['otype'];
$odate=$row['odate'];
$ngoods=$row['ngoods'];
$oconfirm=$row['oconfirm'];
$oid=$row['oid'];
			   echo "<tr><td>$cid</td><td>$otype</td><td>$odate</td><td>$ngoods</td><td>$oconfirm</td><td>$oid</td><td><a href='vieworder.php?orid=$orid' class='button extra-small mb-20'><span>Delete</span></a></td></tr>";
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
if($_GET['orid']!='')
{
$orid=$_GET['orid'];
mysql_query("delete from order_recieve where orid='$orid'");
echo "<script type='text/javascript'>alert('Order Recieving details deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=vieworder.php">';
}
 include "footer.php"; ?>