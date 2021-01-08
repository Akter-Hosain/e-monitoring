<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php
include '../classes/Complain.php';
?>
<?php
    $pd = new Complain();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $insertComplain = $pd->complainInsert($_POST,$_FILES);
    }
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Post Complain</h2>
        <div class="block">  
        <?php
               if (isset($insertComplain)) {
                   echo $insertComplain;
               }
               ?>             
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
               
                <tr>
                    <td>
                        <label>User Area</label>
                    </td>
                    <td>
                        <input type="text" name="userArea" placeholder="Enter your area..." class="medium" />
                    </td>
                </tr>	
				 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Problem Description</label>
                    </td>
                    <td>
                        <textarea class="tinymce" name="body"></textarea>
                    </td>
                </tr>
            <tr>
                    <td>
                        <label>Publish date(Today)</label>
                    </td>
                    <td>
                        <script>
                            $(function(){
                        var dtToday = new Date();
    
                        var month = dtToday.getMonth() + 1;
                        var day = dtToday.getDate();
                        var year = dtToday.getFullYear();
                        if(month < 10)
                        month = '0' + month.toString();
                        if(day < 10)
                        day = '0' + day.toString();
    
                        var minDate= year + '-' + month + '-' + day;
    
                        $('#txtDate').attr('min', minDate);
                        });
                        </script>
                        <input type="date" id="txtDate" name="publish_date" class="medium" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                        <input type="file" name="image" />
                    </td>
                </tr>
				
				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Save" />
                    </td>
                </tr>
            </table>
            </form>
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


