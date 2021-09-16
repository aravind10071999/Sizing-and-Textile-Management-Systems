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
			   $con=mysql_query("select * from swaste")or die(mysql_error());
			   while($row=mysql_fetch_array($con))
			   {
			   $acode=$row['acode'];
			   $swid=$row['swid'];
			   $pname=$row['pname'];
$ocode=$row['ocode'];
$cost=$row['cost'];
	   echo "<tr><td>$acode</td><td>$pname</td><td>$ocode</td><td>$cost</td>
	   <td><a href='view_swaste.php?swid=$swid' class='button extra-small mb-20'><span>Delete</span></a></td></tr>";
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
if($_GET['swid']!='')
{
$swid=$_GET['swid'];
mysql_query("delete from swaste where swid='$swid'");
echo "<script type='text/javascript'>alert('Wastage details are deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_swaste.php">';
}
 include "footer.php"; ?>