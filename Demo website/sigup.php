<!--header start -->
<?php include 'header.php'; ?>
<!--header start End-->
<style type="text/css">
	form-control{
		border-radius: 0px;
	}
</style>
<script type="text/javascript">	
	function buttonClick() {
	   
	    var firstname=document.getElementById("Nameinput");
		var email = document.getElementById("inlineFormInputGroup");   
		var password = document.getElementById("exampleInputPassword"); 
		var atposition=email.value.indexOf("@");  
		var dotposition=email.value.lastIndexOf(".");  
		var boolen = 1; 
		if(firstname.value==""){
		 firstname.style.border="solid 1px  #F36161";
		 document.getElementById("errors2").innerHTML="Enter your Name"; 
         document.getElementById("errors2").style.color=" #e62e00"; 	
         return false;		 
		}
	    else if(email.value=="" || atposition<1 || dotposition<atposition+2 || dotposition+2>=email.value.length){
		    email.style.border="solid 1px  #F36161";
		   document.getElementById("errors1").innerHTML="Enter Valid Email";  
			document.getElementById("errors1").style.color=" #e62e00";  
			return false;
			
		}
		else if (password.value==""|| password.value.length<6){
		password.style.border="solid 1px  #F36161";
		 document.getElementById("errors").innerHTML="Enter more than 6 latter";  
		document.getElementById("errors").style.color=" #e62e00";
	    
		return false;
		} 
		
		else {
		return true;
		}
		}
	
</script>  

<div class="container text-center p-5">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 mx-auto">
        <h1 class="text-white">
          <span class="font-weight-semi-bold text-dark"></span>
        </h1>
      </div>
      <!-- End Title -->
    </div>


<div class="continer">
    <div  class="row ml-0 mr-0">
     
     <div class="d-none d-lg-block col-lg-8 p-1">
		<img id="imge" src="assets/img/Time-management-strategies.jpg"  alt="Time-management-strategies">
		</div>

	<div class="col-lg-4"><br>
	<form onsubmit= "return buttonClick()" action="" method="POST">
    <h3>welcome to Sign up page</h3>
  
	  <div class="col pl-1">
	   <label for="Nameinput"></label>
		  <label class="sr-only" for="">User Name</label>
		  <div class="input-group input-group-lg mb-2">
			<div class="input-group-prepend">
			  <div class="input-group-text">U</div>
			</div>
			<input type="text" class="form-control" id="Nameinput" placeholder="User Name" name="firstname">
			
		  </div>
		  <span class="modal-body" style="text-align:center;">
											<span style="font-family:serif;padding-left: inherit;" id ="errors2"></span>
										  </span>
		</div>
	   <div class="col pl-1">
	  <label for="inlineFormInputGroup"></label>
		  <label class="sr-only" for="">Email</label>
		  <div class="input-group input-group-lg mb-2">
			<div class="input-group-prepend">
			  <div class="input-group-text">@</div>
			</div>

			<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Email" name="email" >
			
		  </div> <span class="modal-body" style="text-align:center;">
											<span style="font-family:serif;padding-left: inherit;" id ="errors1"></span>
										  </span>
		</div>
          
        <!--phone-->
          <div class="col pl-1">
	   <label for="phone"></label>
		  <label class="sr-only" for="">phone</label>
		  <div class="input-group input-group-lg mb-2">
			<div class="input-group-prepend">
			  <div class="input-group-text">N</div>
			</div>
			<input type="text" class="form-control" id="phone" placeholder="phone" name="phone">
			
		  </div>
		  <span class="modal-body" style="text-align:center;">
											<span style="font-family:serif;padding-left: inherit;" id ="errors2"></span>
										  </span>
		</div>
        <!--<div class="input-group mb-3">
          <div class="input-group-prepend">
           <span class="input-group-text">Phone</span>
          </div>
         <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
         <div class="input-group-append">
          <span class="input-group-text">.00</span>
        </div>
       </div>-->

		 <div class="col pl-1">
		 <label for="exampleInputPassword"></label>
		  <label class="sr-only" for="">password</label>
		  <div class="input-group input-group-lg mb-2">
			<div class="input-group-prepend">
			  <div class="input-group-text">$</div>
			</div>
			<input type="text" class="form-control" id="exampleInputPassword" placeholder="password" name="password">
		  </div> <span class="modal-body" style="text-align:center;">
											<span style="font-family:serif;padding-left: inherit;" id ="errors"></span>
										  </span>
		</div>

		<div class="col pl-1">
		 <label for="exampleInputPassword"></label>
		  <label class="sr-only" for="">Re-password</label>
		  <div class="input-group input-group-lg mb-2">
			<div class="input-group-prepend">
			  <div class="input-group-text">$ $</div>
			</div>
			<input type="text" class="form-control" id="exampleInputPassword" placeholder="password" name="password">
		  </div> <span class="modal-body" style="text-align:center;">
											<span style="font-family:serif;padding-left: inherit;" id ="errors"></span>
										  </span>
		</div>
		   
		<button  type="submit" name="submit" id="gif" class="btn btn btn-sm btn-block p-2" >Sign up</button>
		<div id="flt" class="col mt-3">
		<p></p>
		<p>Have an account?<a href="login.php">Log in</a></p><br>
		</div>
		</form>
		<!--<div>
	    <p id="botum">copyright@RajatRanjan</p></div>-->
	
		</div>
		
		
		
	
	
	</div>
  </div>















 


<!-- Footer Section Start -->
<?php include 'Footer.php'; ?>
<!--Footer End  -->