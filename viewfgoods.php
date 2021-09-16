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
			  <tr><td>No.of Pieces</td><td>Finished Date</td><td>Accessories useage</td><td>Action</td></tr>
			  <?php
			   $con=mysql_query("select * from fgoods")or die(mysql_error());
			   while($row=mysql_fetch_array($con))
			   {
			   $npieces=$row['npieces'];
			   $fid=$row['fid'];
$fdate=$row['fdate'];
$auseage=$row['auseage'];
	   echo "<tr><td>$npieces</td><td>$fdate</td><td>$auseage</td><td><a href='viewfgoods.php?fid=$fid' class='button extra-small mb-20'><span>Delete</span></a></td></tr>";
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
if($_GET['fid']!='')
{
$fid=$_GET['fid'];
mysql_query("delete from fgoods where fid='$fid'");
echo "<script type='text/javascript'>alert('Finished Goods deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=viewfgoods.php">';
}
 include "footer.php"; ?>