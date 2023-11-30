<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Sign-in | Lemery Colleges Library</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="login/styles.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<!--  -->
			</div>
			<div class="card-body">
				<form>
					<h6 align="center" style="color: white;">Lemery Colleges Library</h6>
					<br>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text" style="background-color: navy;color:white;"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Identification no." id="loginusername">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span style="background-color: navy;color:white;" class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Password"  id="loginpassword">
					</div>
					
					<div class="form-group">
						<a href=""  class="btn float-right login_btn " style="background-color: navy;color: white;" id="btn_login">Login</a>
						<!-- <input type="submit" value="Login" > -->
					</div>
				</form>
			</div>
			<div class="card-footer">
			 <div class="copyright" id="copyright" style="color:white;">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>  Created by <a target="_blank">Lemery Colleges BSIT</a>.
          </div>
			</div>
		</div>
	</div>
</div>
</body>
</html>

<script type="text/javascript">
	

$(document).on('click', '#btn_login', function(){
	event.preventDefault();
        var idno = document.getElementById("loginusername").value;
        var password = document.getElementById("loginpassword").value;
      
         
            var other_data = "idno="+idno+
            "&password="+password;
                if(idno != '' && password != '' ){
                   $.ajax({

            url:"functions/login.php?"+other_data, 
            method:"POST",  
         
            contentType:false,
            cache:false,
            processData:false,

            beforeSend:function() {

            },  
            error:function(){
                    
            }, 
            success:function(data){
      	
         	if (data.includes('Administrator')) {
        				var username = document.getElementById("loginusername").value="";

        				var password = document.getElementById("loginpassword").value="";

					  window.location = "Administrator/home.php";
					    
            
					}else if (data.includes('Faculty') || data.includes('Student')) {
        				var username = document.getElementById("loginusername").value="";

        				var password = document.getElementById("loginpassword").value="";

					  window.location = "User/home.php";
					    
            
					}else if (data.includes('Librarian')) {
        				var username = document.getElementById("loginusername").value="";

        				var password = document.getElementById("loginpassword").value="";

					  window.location = "Librarian/home.php";
					    
            
					}
					else{
						alert(data);
					}
        }
         

            
 });
                   
                }else{
                    alert("Please complete the fields!");
           
}





       });
</script>