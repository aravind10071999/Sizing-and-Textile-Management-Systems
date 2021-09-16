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
                                                <h4>View Chemical Details </h4>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                       <table align="left" cellpadding="20" cellspacing="0" border="1" width="100%" style="margin-bottom:30px" class="table-data-sheet table-bordered">
			  <tr>
			  <td>Chemical Id</td><td>Chemical Name</td><td>Chemical Effects</td><td>Expiry Date</td><td>Action</td></tr>
			  <?php
			   $con=mysql_query("select * from schemical")or die(mysql_error());
			   while($row=mysql_fetch_array($con))
			   {
			    $chid=$row['chid'];
			   $cid=$row['cid'];
			  
			   
$cname=$row['cname'];
$ceff=$row['ceff'];

$edate=$row['edate'];
			   echo "<tr><td>$cid</td><td>$cname</td><td>$ceff</td><td>$edate</td>
			   <td><a href='view_schemical.php?chid=$chid' class='button extra-small mb-20'><span>Delete</span></a></td></tr>";
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
if($_GET['chid']!='')
{
$chid=$_GET['chid'];
mysql_query("delete from schemical where chid='$chid'");
echo "<script type='text/javascript'>alert('Chemical details deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_schemical.php">';
}
 include "footer.php"; ?>