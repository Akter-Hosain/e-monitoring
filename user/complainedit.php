<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php
include '../classes/Complain.php';
?><?php
if (!isset($_GET['complainId']) || $_GET['complainId'] == NULL) {
    echo "<script>window.location = 'complainlist.php'; </script>";
}else{
    $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['complainId']);
}
?>
<?php
    $pd = new Complain();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $updateProduct = $pd->complainUpdate($_POST, $_FILES, $id);
    }
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Edit Complaint</h2>
        <div class="block">  
        <?php
               if (isset($updateProduct)) {
                   echo $updateProduct;
               }
               ?>   

               <?php
                    $getpro = $pd->getProductById($id);
                    if ($getpro) {
                        while ($value = $getpro->fetch_assoc()) {
                ?>

         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
               
                <tr>
                    <td>
                        <label>User Area</label>
                    </td>
                    <td>
                        <input type="text" name="userArea" value="<?php echo $value['userArea'];?>" class="medium" />
                    </td>
                </tr>
				
				 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Problem Description</label>
                    </td>
                    <td>
                        <textarea class="tinymce" name="body">
                            <?php echo $value['body']; ?>
                            </textarea>
                    </td>
                </tr>
            <tr>
                    <td>
                        <label>Publish date</label>
                    </td>
                    <td>
                      <lebel><?php echo $value['publish_date'];?></lebel>
                    </td>
                </tr>


                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                        <img src="<?php echo $value['image']?>" height="80px" width="200px"/><br/>
                        <input type="file" name="image" />
                    </td>
                </tr>
				
				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Update" />
                    </td>
                </tr>
            </table>
            </form>
             <?php } } ?>
        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<!-- Load TinyMCE -->
<?php include 'inc/footer.php';?>


