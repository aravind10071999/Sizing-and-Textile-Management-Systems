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
                                                <h4>View Concern Entry</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                       <table align="left" cellpadding="20" cellspacing="0" border="1" width="100%" style="margin-bottom:30px" class="table-data-sheet table-bordered">
			  <tr><td>Concern Id</td><td>Name</td><td>Address</td><td>Phone Number</td><td>Email</td><td>Order Id</td><td>Action</td></tr>
			  <?php
			   $con=mysql_query("select * from concern")or die(mysql_error());
			   while($row=mysql_fetch_array($con))
			   {
			   $cid=$row['cid'];
			   $cnid=$row['cnid'];
			   
$cname=$row['cname'];
$caddr=$row['caddr'];
$cphone=$row['cphone'];
$cemail=$row['cemail'];
$oid=$row['oid'];
			   echo "<tr><td>$cid</td><td>$cname</td><td>$caddr</td><td>$cphone</td><td>$cemail</td><td>$oid</td><td><a href='viewconcern.php?cnid=$cnid' class='button extra-small mb-20'><span>Delete</span></a></td></tr>";
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
if($_GET['cnid']!='')
{
$cnid=$_GET['cnid'];
mysql_query("delete from concern where cnid='$cnid'");
echo "<script type='text/javascript'>alert('Concern details deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=viewconcern.php">';
}
 include "footer.php"; ?>