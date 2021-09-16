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
                                                <h4>Phase</h4>
                                            </div>
                                        </div>
										
										 <div class="col-md-12">
										 <?php
										$pq=mysql_query("select * from phase");
										$pn=mysql_num_rows($pq);
										$pn=$pn+1;
										?>
                                            <input type="text" name="acode" placeholder="Phase Code" value="P<?php echo $pn; ?>">
                                        </div>
										
										<div class="col-md-12">
                                            <!--<input type="text" name="pname" placeholder="Phase name">-->
                                        <select name="pname" >
											  <option value="PN1">PN1</option>
											  <option value="PN1">PN2</option>
											  <option value="PN3">PN3</option>
											</select>
										</div>

										                                        
										<div class="col-md-12"><br>
                                            <input type="text" name="pdate" value="<?php echo date("Y-m-d"); ?>">
                                        </div>
										
										<div class="col-md-12">
                                            <input type="text" name="rdate" value="<?php echo date("Y-m-d"); ?>">
                                        </div>


                                        <div class="col-md-12">
                                            <!--<input type="text" name="cost" placeholder="Amount">-->
											<input type="number" max="1000" min="1" name="cost" placeholder="Amount">
                                        </div>
                                        
                                        
                                        <div class="col-md-12">
                                            <button class="submit-btn mt-20" type="submit" name="submit">Add</button>&nbsp;&nbsp;
											<a href='viewphase.php'><button class="submit-btn mt-20" type="button">View Phase</button></a>
											
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
/*	   if($acode == "")
    $acode = StudentCode();
 
 
 function StudentCode()
  {
	$con = mysqli_connect("localhost", "root@localhost", "", "phase");      
	$rs  = mysqli_query($con,"select CONCAT('CID',LPAD(RIGHT(ifnull(max(s_id),'CID00000'),5) + 1,5,'0')) from phase");
      return mysqli_fetch_array($rs)[0];
  }
  
 */ 
  
$acode=$_POST['acode'];
$pdate=$_POST['pdate'];
$rdate=$_POST['rdate'];
$pname=$_POST['pname'];
$cost=$_POST['cost'];



mysql_query("INSERT INTO `nithiya-textiles`.`phase` (  `acode`, `pdate`, `rdate`, `pname`,`cost`) VALUES ( '$acode', '$pdate', '$rdate', '$pname','$cost')")or die(mysql_error());

echo "<script type='text/javascript'>alert('Phase added successfully');</script>";
//echo '<meta http-equiv="refresh" content="0;url=viewphase.php"/>';
echo '<meta http-equiv="refresh" content="0;url=wastage.php"/>';
}
?>
<?php include "footer.php"; ?>