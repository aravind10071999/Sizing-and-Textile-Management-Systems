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
                  <h4>Billing</h4>
				  
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


<div class="col-md-12"><br>
<select name="cname"  required>
										 <option value="">Select</option>
										 <?php
										$cq=mysql_query("select * from concern");
										while($cr=mysql_fetch_array($cq))
										{
										$cid=$cr['cname'];
										echo "<option value='$cid'>$cid</option>";
										}
										?>
										</select>
										
										

                         </div>
						 
<div class="col-md-12"><br>
<select name="ccode"  required>
										 <option value="">Select</option>
										 <?php
										$cq=mysql_query("select * from concern");
										while($cr=mysql_fetch_array($cq))
										{
										$cid=$cr['cid'];
										echo "<option value='$cid'>$cid</option>";
										}
										?>
										</select>
                         </div>
<div class="col-md-12"><br>
<select name="oid"  required>
										 <option value="">Select</option>
										 <?php
										$cq=mysql_query("select * from order_recieve");
										while($cr=mysql_fetch_array($cq))
										{
										$oid=$cr['oid'];
										echo "<option value='$oid'>$oid</option>";
										}
										?>
										</select>
										

                         </div>

<div class="col-md-12"><br>Raw Materials rolls<br><br>
               <input type="text" name="rrolls" value="<?php
										$rq=mysql_query("select * from rawmaterial order by rwgid desc limit 0,1");
										while($rr=mysql_fetch_array($rq))
										{
										$nrolls=$rr['nrolls'];
										echo "$nrolls";
										}
										?>">
                         </div>

<div class="col-md-12"><br>Accessories Cost<br><br>
               <input type="text" name="acost" value="<?php
										$aq=mysql_query("select * from accessories order by acid desc limit 0,1");
										while($ar=mysql_fetch_array($aq))
										{
										$acost=$ar['cost'];
										echo "$acost";
										}
										?>">
                         </div>	

<div class="col-md-12"><br>Phase Cost<br><br>
               <input type="text" name="pcost" value="<?php
										$pq=mysql_query("select * from phase order by pid desc limit 0,1");
										while($pr=mysql_fetch_array($pq))
										{
										$pcost=$pr['cost'];
										echo "$pcost";
										}
										?>">
                         </div>	

<div class="col-md-12"><br>Transport Cost<br><br>
               <input type="text" name="tcost" value="<?php
										$tq=mysql_query("select * from transport order by tid desc limit 0,1");
										while($tr=mysql_fetch_array($tq))
										{
										$tcost=$tr['tcost'];
										echo "$tcost";
										}
										?>">
                         </div>							 						 					 


<?php
$totamt1=$nrolls+$acost+$pcost+$tcost; 
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
											
<a href='viewbill.php'><button class="submit-btn mt-20" type="button">View Data</button></a>
											
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
$totamt1=$_POST['totamt1'];
$rrolls=$_POST['rrolls'];
$acost=$_POST['acost'];
$pcost=$_POST['pcost'];
$tcost=$_POST['tcost'];



mysql_query("INSERT INTO `nithiya-textiles`.`billing` ( bilid,date,cname,ccode,oid,totamt,totamt1,rrolls,acost,pcost,tcost) VALUES ( '$bilid','$date','$cname','$ccode','$oid','$totamt','$totamt1','$rrolls','$acost','$pcost','$tcost')")or die(mysql_error());

echo "<script type='text/javascript'>alert('Billing  details added successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=viewbill.php"/>';
}
?>
<?php include "footer.php"; ?>