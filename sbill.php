<?php include "header.php"; ?>
<div class="about-us-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="about-page-cntent">
                                <div class="message-box box-shadow white-bg">
                 <form id="contact-form" action="" method="post">
                  <div class="row">
                  <div class="col-md-12">
                  <div class="section-title text-uppercase mb-40">
                  <h4>Billing Details</h4>
				  
                    </div>
                    </div>
				<div class="col-md-12">
				 <?php
										$bq=mysql_query("select * from billing");
										$bn=mysql_num_rows($bq);
										$bn=$bn+1;
										?>
										
               <input type="text" name="bilid" placeholder="Billing Id" value="B<?php echo $bn; ?>">
                      </div>
										
		
										                                        
			<div class="col-md-12">
               <input type="text" name="date" value="<?php echo date("Y-m-d"); ?>">
                         </div>


<div class="col-md-12">
               <input type="text" name="cname" value="<?php
										$cq=mysql_query("select * from sconcern order by cid desc limit 0,1");
										while($cr=mysql_fetch_array($cq))
										{
										$cname=$cr['cname'];
										echo "$cname";
										}
										?>">
                         </div>
						 
<div class="col-md-12">
               <input type="text" name="ccode" value="<?php
										$cq=mysql_query("select * from sconcern order by cid desc limit 0,1");
										while($cr=mysql_fetch_array($cq))
										{
										$cid=$cr['cid'];
										echo "$cid";
										}
										?>">
                         </div>
<div class="col-md-12">
               <input type="text" name="oid" value="<?php
										$cq=mysql_query("select * from sconcern order by cid desc limit 0,1");
										while($cr=mysql_fetch_array($cq))
										{
										$oid=$cr['oid'];
										echo "$oid";
										}
										?>">
                         </div>

<div class="col-md-12"><br>Material Cost<br><br>
               <input type="text" name="mtcost" value="<?php
										$mcq=mysql_query("select * from material order by meid desc limit 0,1");
										while($mcr=mysql_fetch_array($mcq))
										{
										$ngoods=$mcr['ngoods'];
										echo "$ngoods";
										}
										?>">
                         </div>
						 
						 
<div class="col-md-12"><br>Chemical Cost<br><br>
               <input type="text" name="ccost" value="1000">
                         </div>


<div class="col-md-12"><br>Warping Cost<br><br>
               <input type="text" name="wrcost" value="1000">
                         </div>						 
						 
<div class="col-md-12"><br>Warehouse Cost<br><br>
               <input type="text" name="wcost" value="1000">
                         </div>						 
						 						 
<div class="col-md-12"><br>Delivery<br><br>
               <input type="text" name="dcost" value="1000">
                         </div>						 
<?php
$totamt1=$ngoods+1000+1000+1000+1000; 
$totamt=$totamt1+$totamt1*24; 
?>

<div class="col-md-12"><br>Total<br><br>
               <input type="text" name="totamt1" placeholder="Total Amount" value="<?php echo "$totamt1"; ?>">
                         </div>
						 
<div class="col-md-12"><br>CGST<br><br>
               <input type="text" name="cgst" value="12">
                         </div>	

<div class="col-md-12"><br>SGST<br><br>
               <input type="text" name="sgst" value="12">
                         </div>	
						 

<div class="col-md-12"><br>Total with Tax<br><br>
               <input type="text" name="totamt" placeholder="Total Amount" value="<?php echo "$totamt"; ?>">
                         </div>	


 <div class="col-md-12">
                     
 <button class="submit-btn mt-20" type="submit" name="submit">Add</button>&nbsp;&nbsp;
											
<a href='view_sbill.php'><button class="submit-btn mt-20" type="button">View Billing Details</button></a>
											
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    
                </div>
            </div>
<?php
if(isset($_POST['submit']))
{
$bilid=$_POST['bilid'];
$date=$_POST['date'];
$cname=$_POST['cname'];
$ccode=$_POST['ccode'];
$oid=$_POST['oid'];
$totamt=$_POST['totamt'];
$mtcost=$_POST['mtcost'];

$totamt1=$_POST['totamt1'];


mysql_query("INSERT INTO `nithiya-textiles`.`sbilling` ( bilid,date,cname,ccode,oid,totamt,mtcost,totamt1) VALUES ( '$bilid','$date','$cname','$ccode','$oid','$totamt','$mtcost','$totamt1')")or die(mysql_error());

echo "<script type='text/javascript'>alert('Billing  details added successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_sbill.php"/>';
}
?>
<?php include "footer.php"; ?>