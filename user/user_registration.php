<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ministry Registration</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/home.css">

</head>

<body>

    
   <div class="navbar">
  <a href="../home.php">Ministry Login</a>
  <a href="login.php">User Login</a>
</div>


<center>
<h1>User Registration</h1>
<!------ Include the above in your HEAD tag ---------->
</center>
<div class="container">

    <div class="row">
        <form role="form" action="bank_registration.php" method="POST">

                <div class="col-md-12 col">
                    <div class="card">
                        <center>  <h3>Create user account</h3></center>
                        <input type="text" placeholder="Enter Your Name" id="user_name" class="form-control" required>
					<br>
					<input type="email" placeholder="Enter Your Email" id="email" class="form-control" required="">
					<br>
					<input type="password" placeholder="Create New Password" id="password" class="form-control" required="">
					<br>
			


		            </div>
                    </div>
       
         </div>
                <br>
		        <center>
		            <br>
		            <br>
		            <input type="button" class="btn btn-default" id="add" value="Agree & Signup">

              </div>
		            
		        </center>
               

        </form>


	<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript">

    
        $(document).ready(function(){
            
            $('#add').click(function(){
                
                var user_name = $('#user_name').val();
                var email = $('#email').val();
                var password = $('#password').val();

                $.ajax({
                    url:"AddAction.php",
                    type:"POST",
                    data: {user_name : user_name, email : email, password : password},
                    success: function(data){
                        
                        if(data == 'success'){ 
                            var user_name = $('#user_name').val('');
							var email = $('#email').val('');
							var password = $('#password').val('');
						    window.alert("Succesfully Registered");
						    console.log("data");
                        }
                        else{
                           window.alert("Succesfully Registered");
                        }
                    }
                })
            })
        
        })
        
    </script>

				  
    

   

 
    <br>
        <br>

    </body>
</html>





<style>
    
 * {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 38px;
  text-align: center;
  background-color: #f1f1f1;
  margin-top: 10px;
}

</style>


<br>
<br>