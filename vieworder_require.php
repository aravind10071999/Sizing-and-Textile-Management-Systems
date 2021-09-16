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
                                                <h4>View Order Requirement</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                       <table align="left" cellpadding="20" cellspacing="0" border="1" width="100%" style="margin-bottom:30px" class="table-data-sheet table-bordered">
			  <tr><td>Requirement Code</td><td>Rawmaterial Requirement (in Rolls)</td><td>Box Requirement</td><td>Cover Requirement</td><td>Order Code</td><td>Action</td></tr>
			  <?php
			   $con=mysql_query("select * from order_require")or die(mysql_error());
			   while($row=mysql_fetch_array($con))
			   {

			   $ordid=$row['ordid'];
$rcode=$row['rcode'];
$nrequire=$row['nrequire'];
$brequire=$row['brequire'];
$crequire=$row['crequire'];
$ocode=$row['ocode'];

			   echo "<tr><td>$rcode</td><td>$nrequire</td><td>$brequire</td><td>$crequire</td><td>$ocode</td><td><a href='vieworder_require.php?ordid=$ordid' class='button extra-small mb-20'><span>Delete</span></a></td></tr>";
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
if($_GET['ordid']!='')
{
$ordid=$_GET['ordid'];
mysql_query("delete from order_require where ordid='$ordid'");
echo "<script type='text/javascript'>alert('Order Requirement deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=vieworder_require.php">';
}
 include "footer.php"; ?>