
<?php

session_start();
include 'inc/header.php';
	if(!isset($_SESSION['email']))
	{
		header("location:customerlogin.php");
}
else{ 
  $email= $_SESSION['email'];
  $query = "select * from ministry_login where email='$email'";
  $result = $db->select($query);
  foreach($result as $res){
    }
  if($result){
   $_SESSION['email']=$email;
  }
}




include 'navbar.php';
?>


<?php  

?>

<?php
if (!isset($_GET['proid']) || $_GET['proid'] == NULL) {
	echo "<script>window.location = '404.php'; </script>";
}else{
	$id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['proid']);
}
?>

 <div class="main">
    <div class="content">
    	<div class="section group">
				<div class="cont-desc span_1_of_2">	
				
				<?php
						$getPd = $pd->getSingleProduct($id);
						if ($getPd) {
							while ($result = $getPd->fetch_assoc()) {
				?>	
				

					<div class="grid images_3_of_2">
						<img src="user/<?php echo $result['image']?>" alt="" />
					</div>
				<div class="desc span_3_of_2">
					<h2>This Complaint was from  |<?php echo $result['user_name'];?>|</h2> 
					<h3>User Area: <?php echo $result['userArea'];?></h3> 
									
					<div class="price">
						<p>PUBLISHED ON: <span><?php echo $result['publish_date'];?></span></p>
</div>

<div class="bid-now">
					<form action="bidinput.php" method="POST">
						<input type="text" name="userArea" hidden value="<?php echo $result['userArea']?>"/>
						<input type="text" name="name" hidden value="<?php echo $name?>"/>
						<input type="text" name="email" hidden value="<?php echo $email?>"/>
						<input type="number" name="phone" hidden value="<?php echo $phone?>"/>
						<input type="text" name="district" hidden value="<?php echo $district?>"/>
						<input type="text" name="proid" hidden value="<?php echo $_GET['proid']?>"/>
					</form>	

				</div>






<span style="color: red; font-size: 18px;"></span>
</div>
<div class="product-desc">
<h2>Details</h2>
			<?php echo ($result['body']);?>
	    </div>
	    <?php } } ?>

</div>
</div>
</div>
</div>




		<style>
			.product-desc,.product-tags{
	clear:both;
	padding-top:20px;
}
.product-desc h2,.product-tags h2{
	padding:8px 20px;
	background:#000000;
	border: 1px solid #EBE8E8;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-o-border-radius: 5px;
	font-family: 'Monda', sans-serif;
	font-size:1.2em;
	color:white;
	text-transform: uppercase;
	text-shadow:0 1px 5px rgba(34, 34, 34, 0.17);
}
.product-desc p{
	font-size: 0.8em;
	padding: 0.3em 0;
	color: #000000;
	line-height: 1.6em;
	font-family: verdana, arial, helvetica, helve, sans-serif;
}

.span_3_of_2{
	float:right;
	margin-top:1%;
	line-height:2em;
}
.span_3_of_2 h2{
		padding:12px 20px;
		font-size:1em;
		font-weight:bold;
		font-family: Arial, "Helvetica Neue", "Helvetica", Tahoma, Verdana, sans-serif;
		border: 1px solid rgba(0,0,0,0.1);
  		box-shadow: inset 0 1px 0 rgba(255,255,255,0.7);
        background        : white;       
        color             : black;
        text-shadow       : 0 1px 0 rgba(0, 0, 0, 0.4); 
        -webkit-box-shadow: 0 1px rgba(255, 255, 255, 0.2) inset, 0 2px 2px -1px rgba(0, 0, 0, 0.3);
		-moz-box-shadow: 0 1px rgba(255,255,255,0.2) inset, 0 2px 2px -1px rgba(0,0,0,0.3);
		box-shadow: 0 1px rgba(255, 255, 255, 0.2) inset, 0 2px 2px -1px rgba(0, 0, 0, 0.3);
		-moz-border-radius: 3px;
		-webkit-border-radius: 3px;
		border-radius: 3px;
		-webkit-transition: all 0.5s ease;
		-moz-transition: all 0.5s ease;
		-o-transition: all 0.5s ease;
		transition: all 0.5s ease;
}
.span_3_of_2 h2{
	    border: 1px solid #303030;
        background: white; 
        text-decoration:none;
}
.buysubmit{
	background: #000000;
	border: 1px solid rgba(0, 0, 0, 0.1);
	border-radius: 5px;
	color: #fff;
	font-family: Arial,"Helvetica Neue","Helvetica",Tahoma,Verdana,sans-serif;
	font-size: 0.8em;
	padding: 7px 15px;
	text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.25);
	cursor:pointer;
	outline:none;
}
.bid-now{
	padding-top:15px;
}
.price p{
	font-size:1em;
	padding:1.5% 1%;
	color: #000000;
	vertical-align:top;
}
.price p span{
	font-size:1.5em;
	font-family: 'Monda', sans-serif;
	color: grey;
}

.images_3_of_2 img {
  height: 380px;
  max-width: 100%;
  width: 100%;
}

.span_3_of_2 h3{
		padding:1.5% 1%;
		font-size:1.5em;
		font-weight:bold;
		font-family: Arial, "Helvetica Neue", "Helvetica", Tahoma, Verdana, sans-serif;
		background        : white;       
        color             : green;
        text-shadow       : 0 1px 0 rgba(0, 0, 0, 0.4); 
  		-webkit-transition: all 0.5s ease;
		-moz-transition: all 0.5s ease;
		-o-transition: all 0.5s ease;
		transition: all 0.5s ease;
}

		</style>


		<?php 
		

?>
<br>
<br>

