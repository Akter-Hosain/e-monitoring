<?php
session_start();
	if(!isset($_SESSION['email']))
	{
		header("location:ministrylogin.php");
	}

include 'inc/header.php';
include 'navbar.php';
?>


<div class="main">
 <div class="clear"></div>
    <div class="content">
    	<div class="row section group">
            <div class="col-lg-12">
            	<div class="content">
	    		    <div class="heading">
	    		    <?php echo "        "?>
	    		       <h3>All Complaints</h3>
	    		    </div>
    		        <div class="clear"></div>
	    	    </div>
		        <div class="row section group">
		      		<?php
						$getPd = $pd->getAllProduct2();
						if ($getPd) {
							while ($result = $getPd->fetch_assoc()) {
								
					?>
						<div class="col-lg-3 grid_1_of_4 images_1_of_4 cake_snippet_width">
							 <a href="preview.php?proid=<?php echo $result['complainId']?>"><img src="user/<?php echo $result['image']?>" height="100px" width="100px" alt="" /></a>
							 <h3 style ="font-weight: bold;">Complain From |<?php echo $result['user_name'];?>|</h3>
							 <h2><?php echo $result['userArea'];?> </h2>
						     <div class="button"><span><a href="preview.php?proid=<?php echo $result['complainId']?>" class="details">Details</a></span></div>
						</div>
				    <?php } } ?>
	            </div>
            </div>
        </div>
    </div>
</div>

<style>
	
	.heading{
	float:left;
	margin-right:10%;
}
.heading h3{
	font-family: 'Monda', sans-serif;
	font-size:40px;
	color:#090909;
	text-transform:uppercase;
	padding-top: 3%;
}
</style>
<br>
<br>
<br>