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
                                                <h4>View Supplier Details </h4>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                       <table align="left" cellpadding="20" cellspacing="0" border="1" width="100%" style="margin-bottom:30px" class="table-data-sheet table-bordered">
			  <tr>
			  <td>Supplier Id</td><td>Supplier Name</td><td>Address</td><td>Phone Number</td><td>Email</td><td>Action</td></tr>
			  <?php
			   $con=mysql_query("select * from supplier")or die(mysql_error());
			   while($row=mysql_fetch_array($con))
			   {
			    $spid=$row['spid'];
			   $sid=$row['sid'];
			  
			   
$sname=$row['sname'];
$saddr=$row['saddr'];
$sphone=$row['sphone'];
$semail=$row['semail'];

			   echo "<tr><td>$sid</td><td>$sname</td><td>$saddr</td><td>$sphone</td><td>$semail</td><td><a href='view_supplier.php?spid=$spid' class='button extra-small mb-20'><span>Delete</span></a></td></tr>";
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
if($_GET['spid']!='')
{
$spid=$_GET['spid'];
mysql_query("delete from supplier where spid='$spid'");
echo "<script type='text/javascript'>alert('Supplier details deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_supplier.php">';
}
 include "footer.php"; ?>