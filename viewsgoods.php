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
                                                <h4>View Sample Goods</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                       <table align="left" cellpadding="20" cellspacing="0" border="1" width="100%" style="margin-bottom:30px" class="table-data-sheet table-bordered">
			  <tr><td>Sample Code</td><td>Order Id</td><td>Date</td><td>No.of Sample</td><td>Material Code</td><td>Design Code</td><td>Size Code</td><td>Action</td></tr>
			  <?php
			   $con=mysql_query("select * from sgoods")or die(mysql_error());
			   while($row=mysql_fetch_array($con))
			   {
			   $scode=$row['scode'];
			   $sgid=$row['sgid'];
$nsent=$row['nsent'];
$odate=$row['odate'];
$mcode=$row['mcode'];
$dcode=$row['dcode'];
$szcode=$row['szcode'];
$oid=$row['oid'];
			   echo "<tr><td>$scode</td><td>$sgid</td><td>$odate</td><td>$nsent</td><td>$mcode</td><td>$dcode</td><td>$szcode</td><td><a href='viewsgoods.php?sgid=$sgid' class='button extra-small mb-20'><span>Delete</span></a></td></tr>";
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
if($_GET['sgid']!='')
{
$sgid=$_GET['sgid'];
mysql_query("delete from sgoods where sgid='$sgid'");
echo "<script type='text/javascript'>alert('Sample Goods deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=viewsgoods.php">';
}
 include "footer.php"; ?>