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
                                  <h4>view delivery</h4>
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                       <table align="left" cellpadding="20" cellspacing="0" border="1" width="100%" style="margin-bottom:30px" class="table-data-sheet table-bordered">
			  <tr>
			  <td>Delivery Id</td>
			  <td>Date</td>
			  <td>Location</td>
			  <td>Action</td>
			  </tr>
			  <?php
			   $con=mysql_query("select * from sdelivery")or die(mysql_error());
			   while($row=mysql_fetch_array($con))
			   {
			   $did=$row['did'];
			   $deid=$row['deid'];
			   $date=$row['date'];
			   $loc=$row['loc'];
			   
			   echo "<tr>
			   <td>$deid</td>
			   <td>$date</td>
			   <td>$loc</td>
			   <td><a href='view_sdelivery.php?did=$did' class='button extra-small mb-20'><span>Delete</span></a></td></tr>";
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
if($_GET['did']!='')
{
$did=$_GET['did'];
mysql_query("delete from sdelivery where did='$did'");
echo "<script type='text/javascript'>alert('Delivery details deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_sdelivery.php">';
}
 include "footer.php"; ?>