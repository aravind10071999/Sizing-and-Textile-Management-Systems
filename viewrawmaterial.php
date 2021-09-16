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
                                                <h4>View Purchase of Rawmaterial</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                       <table align="left" cellpadding="20" cellspacing="0" border="1" width="100%" style="margin-bottom:30px" class="table-data-sheet table-bordered">
			  <tr><td>Date</td><td>No.of Cloth Rolls</td><td>Weight</td><td>Material Code</td><td>Supplier Code</td><td>Action</td></tr>
			  <?php
			   $con=mysql_query("select * from rawmaterial")or die(mysql_error());
			   while($row=mysql_fetch_array($con))
			   {
			   $nrolls=$row['nrolls'];
			   $rwgid=$row['rwgid'];
$nsent=$row['nsent'];
$pdate=$row['pdate'];
$mcode=$row['mcode'];
$scode=$row['scode'];
$weight=$row['weight'];
			   echo "<tr><td>$pdate</td><td>$nrolls</td><td>$weight</td><td>$mcode</td><td>$mcode</td><td>$scode</td><td><a href='viewrawmaterial.php?rwgid=$rwgid' class='button extra-small mb-20'><span>Delete</span></a></td></tr>";
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
if($_GET['rwgid']!='')
{
$rwgid=$_GET['rwgid'];
mysql_query("delete from rawmaterial where rwgid='$rwgid'");
echo "<script type='text/javascript'>alert('Rawmaterial deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=viewrawmaterial.php">';
}
 include "footer.php"; ?>