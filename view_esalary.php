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
                                  <h4>view Employee Salary Details</h4>
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                       <table align="left" cellpadding="20" cellspacing="0" border="1" width="100%" style="margin-bottom:30px" class="table-data-sheet table-bordered">
			  <tr>
			  <td>Salary Id</td>
			  <td>Amount</td>
			  <td>Salary Date</td>
			  <td>Employee Name</td>
			  <td>Action</td>
			  </tr>
			  <?php
			   $con=mysql_query("select * from esalary")or die(mysql_error());
			   while($row=mysql_fetch_array($con))
			   {
			   $sid=$row['sid'];
			   $said=$row['said'];
			   $amt=$row['amt'];
			   $sdate=$row['sdate'];
			   $ename=$row['ename'];
			   
			   echo "<tr>
			   <td>$said</td>
			   <td>$amt</td>
			   <td>$sdate</td>
			   <td>$ename</td>
			   <td><a href='view_esalary.php?sid=$sid' class='button extra-small mb-20'><span>Delete</span></a></td></tr>";
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
if($_GET['sid']!='')
{
$sid=$_GET['sid'];
mysql_query("delete from esalary where sid='$sid'");
echo "<script type='text/javascript'>alert('Employee Salary details deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_esalary.php">';
}
 include "footer.php"; ?>