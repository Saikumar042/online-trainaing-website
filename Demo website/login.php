<!--header start -->
<?php include 'header.php'; ?>
<!--header start End-->

<script type="text/javascript">	
	
	function buttonClick() {
	    var email = document.getElementById("inlineFormInputGroup");   
		var password = document.getElementById("exampleInputPassword1"); 
		var atposition=email.value.indexOf("@");  
		var dotposition=email.value.lastIndexOf(".");  
		var boolen = 1;
		if(email.value=="" || atposition<1 || dotposition<atposition+2 || dotposition+2>=email.value.length){
		    email.style.border="solid 1px  #F36161";
		   document.getElementById("errors1").innerHTML="Enter Valid Email";  
			document.getElementById("errors1").style.color=" #e62e00";  
			boolen = 0;
			if(boolen ){
			email.style.border="solid 1px green";
			}
			return false;
			
		}
		
		else if (password.value==""){
		
		password.style.border="solid 1px  #F36161";
		document.getElementById("errors").innerHTML="Enter valid password"; 
		  document.getElementById("errors").style.color=" #e62e00";
	    
		return false;
		} 
		else 
		return true;
		}
	
</script> 
<div class="container text-center p-5">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 mx-auto">
        
      </div>
      <!-- End Title -->
    </div>



  <div class="continer">
    <div  class="row ml-0 mr-0">
     <div class="d-none d-lg-block col-lg-8 p-1">
	<img id="imge" src="assets/img/login.png"  alt="epmetrics">
    </div>

	<div class="col-lg-4 mt-4"><br>
	<form onsubmit= "return buttonClick()"  action="urlshort.php" method="POST">

  <h3>welcome to Login page</h3>
  
   <div class="col pl-1 mt-2">
  <label for="inlineFormInputGroup"></label>
      <label class="sr-only" for="inlineFormInputGroup">Username</label>
      <div class="input-group input-group-lg mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text">@</div>
        </div>
        <input type="" class="form-control" id="inlineFormInputGroup" placeholder="Email" name="email">
		
      </div> <span class="modal-body" style="text-align:center;">
										<span style="font-family:serif;padding-left: inherit;" id ="errors1"></span>
									  </span>
    </div>
     <div class="col pl-1 ">
     <label for="exampleInputEmail1"></label>
      <label class="sr-only" for="">password</label>
      <div class="input-group input-group-lg mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text">$</div>
        </div>
        <input type="" class="form-control" id="exampleInputPassword1" placeholder="password" name="password">
      </div>
	  <span class="modal-body" style="text-align:center;">
			<span style="font-family:serif;padding-left: inherit;" id ="errors"></span>
           </span>							
	</div>
	  
<div class="custom-control custom-checkbox ml-2" >
  <input type="checkbox" class="custom-control-input" id="defaultChecked2"  checked>
  <label class="custom-control-label" for="defaultChecked2">Remember my Password</label>
</div>
		<button type="submit" name="submit" id="gif" class="btn btn btn-sm btn-block mt-4 p-2"  >Login</button>
		<div id="flt" class="col mt-2">
		<a href="forgetpassword.php">Forget password</a>
		<p>Do you have an account?<a href="sigup.php">Sign in</a></p><br>
		</div>
		</form>
		<--<div >
	    <p id="botum">copyright@k sai kumar</p></div>-->
	
	</div>
	
	
	
	
	
	</div>
  </div>














 


<!-- Footer Section Start -->
<?php include 'Footer.php'; ?>
<!--Footer End  -->