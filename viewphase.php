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
                                                <h4>View phase</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                       <table align="left" cellpadding="20" cellspacing="0" border="1" width="100%" style="margin-bottom:30px" class="table-data-sheet table-bordered">
			  <tr><td>Phase Code</td><td>Date</td><td>Phase name</td><td>Sending date</td><td>Receiving date</td><td>Cost</td><td>Action</td></tr>
			  <?php
			   $con=mysql_query("select * from phase")or die(mysql_error());
			   while($row=mysql_fetch_array($con))
			   {
			   $acode=$row['acode'];
			   $pid=$row['pid'];
$pname=$row['pname'];
$pdate=$row['pdate'];
$rdate=$row['rdate'];
$cost=$row['cost'];
			   echo "<tr><td>$acode</td><td>$pdate</td><td>$pname</td><td>$pdate</td><td>$rdate</td><td>$cost</td><td><a href='viewphase.php?pid=$pid' class='button extra-small mb-20'><span>Delete</span></a></td></tr>";
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
if($_GET['pid']!='')
{
$pid=$_GET['pid'];
mysql_query("delete from phase where pid='$pid'");
echo "<script type='text/javascript'>alert('Phase deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=viewphase.php">';
}
 include "footer.php"; ?>