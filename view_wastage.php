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
                                                <h4>View Wastage</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                       <table align="left" cellpadding="20" cellspacing="0" border="1" width="100%" style="margin-bottom:30px" class="table-data-sheet table-bordered">
			  <tr><td>Wastage Code</td><td>Phase Name</td><td>Order Code</td>
			  <td>Amount</td>
			  <td>Action</td></tr>
			  <?php
			   $con=mysql_query("select * from wastage")or die(mysql_error());
			   while($row=mysql_fetch_array($con))
			   {
			   $wid=$row['wid'];
			   $acode=$row['acode'];
			   $ocode=$row['ocode'];
			   $pname=$row['pname'];

$cost=$row['cost'];
	   echo "<tr><td>$acode</td><td>$ocode</td><td>$pname</td><td>$cost</td>
	   <td><a href='view_wastage.php?wid=$wid' class='button extra-small mb-20'><span>Delete</span></a></td></tr>";
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
mysql_query("delete from wastage where wid='$wid'");
echo "<script type='text/javascript'>alert('Wastage details are deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_wastage.php">';
}
 include "footer.php"; ?>