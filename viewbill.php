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
                                  <h4>view billing</h4>
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                       <table align="left" cellpadding="20" cellspacing="0" border="1" width="100%" style="margin-bottom:30px" class="table-data-sheet table-bordered">
			  <tr>
			  <td>Billing Id</td>
			  <td>Date</td>
			  <td>Concern Name</td>
			  <td>Concern Code</td>
			  <td>Order Id</td>
			  <td>Total Amount</td>
			  <td>Action</td>
			  </tr>
			  <?php
			   $con=mysql_query("select * from billing")or die(mysql_error());
			   while($row=mysql_fetch_array($con))
			   {
			   $bid=$row['bid'];
			   $bilid=$row['bilid'];
			   $date=$row['date'];
			   $cname=$row['cname'];
$ccode=$row['ccode'];
$oid=$row['oid'];
$totamt=$row['totamt'];
			   echo "<tr>
			   <td>$bilid</td>
			   <td>$date</td>
			   <td>$cname</td>
			   <td>$ccode</td>
			   <td>$oid</td>
			   <td>$totamt</td>
			   <td><a href='viewbill.php?bid=$bid' class='button extra-small mb-20'><span>Delete</span></a>&nbsp;&nbsp;<a href='printbill.php?bid=$bid' class='button extra-small mb-20' target='_blank'><span>Print Bill</span></a></td></tr>";
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
if($_GET['bid']!='')
{
$bid=$_GET['bid'];
mysql_query("delete from billing where bid='$bid'");
echo "<script type='text/javascript'>alert('billing details deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=viewbill.php">';
}
 include "footer.php"; ?>