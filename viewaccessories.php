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
                                                <h4>View Accessories</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                       <table align="left" cellpadding="20" cellspacing="0" border="1" width="100%" style="margin-bottom:30px" class="table-data-sheet table-bordered">
			  <tr><td>Accessories Code</td><td>Date</td><td>No.of boxes</td><td>No.of Covers</td><td>Cost</td><td>Supplier Code</td><td>Action</td></tr>
			  <?php
			   $con=mysql_query("select * from accessories")or die(mysql_error());
			   while($row=mysql_fetch_array($con))
			   {
			   $acode=$row['acode'];
			   $acid=$row['acid'];
$nbox=$row['nbox'];
$pdate=$row['pdate'];
$ncover=$row['ncover'];
$scode=$row['scode'];
$cost=$row['cost'];
			   echo "<tr><td>$acode</td><td>$pdate</td><td>$nbox</td><td>$ncover</td><td>$cost</td><td>$scode</td><td><a href='viewaccessories.php?acid=$acid' class='button extra-small mb-20'><span>Delete</span></a></td></tr>";
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
if($_GET['acid']!='')
{
$acid=$_GET['acid'];
mysql_query("delete from accessories where acid='$acid'");
echo "<script type='text/javascript'>alert('Accessories deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=viewaccessories.php">';
}
 include "footer.php"; ?>