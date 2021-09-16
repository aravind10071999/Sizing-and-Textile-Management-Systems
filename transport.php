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
                  <h4>Transport</h4>
                    </div>
                    </div>
				<div class="col-md-12">
				  <?php
										$tq=mysql_query("select * from transport");
										$tn=mysql_num_rows($tq);
										$tn=$tn+1;
										?>
										
               <input type="text" name="tcode" placeholder="Transport Code" value="T<?php echo $tn; ?>">
                      </div>
										
			<div class="col-md-12">
               <input type="text" name="gto" placeholder="Goods To">
                         </div>

										                                        
			<div class="col-md-12">
               <input type="text" name="ccode" placeholder="Container Code">
                         </div>


<div class="col-md-12">
               <!--<input type="text" name="vno" placeholder="Vehicle Number">-->
			   <select name="vno" ><br>
											  <option value="TN 38 J 9842(Eicher)">TN 38 J 9842(Eicher)</option>
											  <option value="PN2">TN 42 T 7890(Lorry)</option>
											  <option value="PN3">TN 49 G 7890(AUTO)</option>
											</select>
                         </div>

<div class="col-md-12"><br>
               <!--<input type="text" name="dist" placeholder="Distance">-->
               <input type="number" max="100000" min="1" name="dist" placeholder="Distance(in km)">
			   </div>
							
										
										
			<div class="col-md-12">
            <input type="text" name="ddate" value="<?php echo date("Y-m-d"); ?>">
                                        </div>


                 <div class="col-md-12">
               <!--<input type="text" name="tcost" placeholder="Transportation Cost">-->
                                        <input type="number" max="100000" min="1" name="tcost" placeholder="Transport cost(rupees)">
										</div>
                                        
                                        
                                        <div class="col-md-12">
                                            <button class="submit-btn mt-20" type="submit" name="submit">Add</button>&nbsp;&nbsp;
											<a href='viewtrans.php'><button class="submit-btn mt-20" type="button">View Data</button></a>
											
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
$tcode=$_POST['tcode'];
$gto=$_POST['gto'];
$ccode=$_POST['ccode'];
$vno=$_POST['vno'];
$dist=$_POST['dist'];

$ddate=$_POST['ddate'];
$tcost=$_POST['tcost'];



mysql_query("INSERT INTO `nithiya-textiles`.`transport` (  `tcode`,`gto`,ccode,vno,dist, `ddate`,`tcost`) VALUES ( '$tcode','$gto','$ccode','$vno','$dist' ,'$ddate','$tcost')")or die(mysql_error());

echo "<script type='text/javascript'>alert('Transport details added successfully');</script>";
//echo '<meta http-equiv="refresh" content="0;url=viewtrans.php"/>';
echo '<meta http-equiv="refresh" content="0;url=billing.php"/>';
}
?>
<?php include "footer.php"; ?>