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
                                  <h4>View Transport </h4>
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                       <table align="left" cellpadding="20" cellspacing="0" border="1" width="100%" style="margin-bottom:30px" class="table-data-sheet table-bordered">
			  <tr>
			  <td>Transport Code</td>
			  <td>Goods To</td>
			  <td>Container Code</td>
			  <td>Vehicle Number</td>
			  <td>Distance</td>
			  <td>Departure Date</td>
			  <td>Transportation Cost</td>
			  <td>Action</td>
			  </tr>
			  <?php
			   $con=mysql_query("select * from transport")or die(mysql_error());
			   while($row=mysql_fetch_array($con))
			   {
			   $tid=$row['tid'];
			   $tcode=$row['tcode'];
			   
$gto=$row['gto'];
$ccode=$row['ccode'];
$vno=$row['vno'];
$dist=$row['dist'];

$ddate=$row['ddate'];
$tcost=$row['tcost'];
			   echo "<tr>
			   <td>$tcode</td>
			   <td>$gto</td>
			   <td>$ccode</td>
			   <td>$vno</td>
			   <td>$dist</td>
			   <td>$ddate</td>
			   <td>$tcost</td>
			   <td><a href='viewtrans.php?tid=$tid' class='button extra-small mb-20'><span>Delete</span></a></td></tr>";
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
if($_GET['tid']!='')
{
$tid=$_GET['tid'];
mysql_query("delete from transport where tid='$tid'");
echo "<script type='text/javascript'>alert('Transport details deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=viewtrans.php">';
}
 include "footer.php"; ?>