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
                                                <h4>View Warping Details </h4>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                       <table align="left" cellpadding="20" cellspacing="0" border="1" width="100%" style="margin-bottom:30px" class="table-data-sheet table-bordered">
			  <tr>
			  <td>Warping Id</td><td>Warping Type</td><td>Machine Name</td><td>Process</td><td>Action</td></tr>
			  <?php
			   $con=mysql_query("select * from warping")or die(mysql_error());
			   while($row=mysql_fetch_array($con))
			   {
			    $waid=$row['waid'];
			   $wid=$row['wid'];
			  
			   
$wtype=$row['wtype'];
$mname=$row['mname'];
$process=$row['process'];
			   echo "<tr><td>$wid</td><td>$wtype</td><td>$mname</td><td>$process</td><td><a href='view_warping.php?waid=$waid' class='button extra-small mb-20'><span>Delete</span></a></td></tr>";
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
if($_GET['waid']!='')
{
$waid=$_GET['waid'];
mysql_query("delete from warping where waid='$waid'");
echo "<script type='text/javascript'>alert('Warping details deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_warping.php">';
}
 include "footer.php"; ?>