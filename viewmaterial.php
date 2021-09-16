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
                                                <h4>View Material Details</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                       <table align="left" cellpadding="20" cellspacing="0" border="1" width="100%" style="margin-bottom:30px" class="table-data-sheet table-bordered">
			  <tr>
			  <td>Material Id</td>
			  <td>Material Type</td>
			  <td>Date</td>
			  <td>No.of Goods</td>
			  <td>Confirmation</td>
			  <td>Concern Id</td>
			  <td>Action</td></tr>
			  <?php
			   $con=mysql_query("select * from material")or die(mysql_error());
			   while($row=mysql_fetch_array($con))
			   {
			  
			   $meid=$row['meid'];
			   $mid=$row['mid'];
$mtype=$row['mtype'];
$odate=$row['odate'];
$ngoods=$row['ngoods'];
$oconfirm=$row['oconfirm'];
$cid=$row['cid'];
			   echo "<tr>
			   <td>$mid</td>
			   <td>$mtype</td>
			   <td>$odate</td>
			   <td>$ngoods</td>
			   <td>$oconfirm</td>
			   <td>$cid</td>
			   <td><a href='viewmaterial.php?meid=$meid' class='button extra-small mb-20'><span>Delete</span></a></td></tr>";
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
if($_GET['meid']!='')
{
$meid=$_GET['meid'];
mysql_query("delete from material where meid='$meid'");
echo "<script type='text/javascript'>alert('Material Recieving details deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=viewmaterial.php">';
}
 include "footer.php"; ?>