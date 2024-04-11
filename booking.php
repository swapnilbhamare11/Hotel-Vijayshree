<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
  <link rel="icon" href="images/android-icon-48x48.png" type="image/x-icon" />
      <title>NPIT Solutions|Bookings</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <link rel="stylesheet" href="fonts/icomoon/style.css"> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css"> 
     <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css"> 
	 	<link rel="stylesheet" href="css/icomoon.php">
    <link rel="stylesheet" href="css/aos.css"> 
    <link rel="stylesheet" href="css/style.css"> 
	<link rel="shortcut icon" href="images/weblogo.png">
	<link href="css/font-awesome-4.7.0/css/font-awesome.min.php" rel="stylesheet" type="text/css">
  </head>
  <body>
  
  <div class="site-wrap">  
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <?php
include "header.php";
    ?>
  
   <br>
    
	
	 <!------------- Term & Conditions-------------->
	<div class="site-section  bg-light" data-aos="fade-up" data-aos-delay="100" >
      <div class="container">
        <div class="row">
          <div class="col-md-3 mx-auto text-center"><br>
            <h1>Booking Form</h1>
          </div>
        </div> 
        
      </div>
    </div> 
	
	<div class="site-section site-section-sm" data-aos="fade-up" data-aos-delay="200">
      <div class="container">
        <div class="row"> 
          <div class="col-md-12 col-lg-7 mb-5" style=" margin-top: -110px;padding: 0px;"> 
            <form  name="enquiryForm" method="post">
              <div class="box-body"> 
			  <div id="signupalert" style="color:#ff0000;"></div>
                <div class="form-group">
                  <label for="content">Your Name</label>
					<input type="text" class="form-control" name="name"  id="name" placeholder="Your Name" required>
                </div>
                </div>
                <div class="box-body"> 
                <div class="form-group">
                  <label for="content">Your Email</label>
					<input type="email" class="form-control" name="emailid"  id="emailid" placeholder="Your Email" required>
                </div>
                </div>
                <div class="box-body"> 
                <div class="form-group">
                  <label for="content">Your Mobile</label>
					<input type="text" class="form-control" name="mobile"  id="mobile" placeholder="Your Mobile" value="" required>
                </div>
                </div>
                <div class="box-body"> 
                <div class="form-group">
                  <label for="content">Rooms</label>
				  <select class="form-control" name="rooms"  id="rooms" placeholder="Select Room"  value=""  required>
				  <option value="">Select Room</option>
				  <option value="Deulex AC">Deluxe AC</option>	
		  <option value="Deulex non AC">Deluxe non AC</option>				  
				  <option value="Separate Family Room"> Separate Family Room</option>
				</select>
                </div>
                </div>
				                <div class="box-body"> 
                <div class="form-group">
                  <label for="content">No of Rooms</label>
				  <select class="form-control" name="roomsno"  id="roomsno" placeholder="No of Rooms"  value=""  required>
				  <option value="">Select Room</option>
				  <option value="1">1</option>
				    <option value="2">2</option>
					 
				</select>
                </div>
                </div>
				
				 <div class="row">
				  <div class="col-md-6">  
				<div class="box-body"> 
                <div class="form-group">
                  <label for="content">Check - In - Date</label>  
					<input type="date" class="form-control" name="date"  id="date" required>
              
				</div>
				</div>
				</div>
				 <div class="col-md-6">
				<div class="box-body"> 
				<div class="form-group">
				  
                  <label for="content">Check - Out - Date</label>
					<input type="date" class="form-control" name="date1"  id="date1" required>
                
				</div>
			 </div>
                </div>
				</div>
				 <div class="row">
				  <div class="col-md-6">  
				<div class="box-body"> 
                <div class="form-group">
				
                  <label for="content">No. of Adult(s)</label>  
					<input type="text" class="form-control" name="adult"  id="adult" placeholder="No. of Adult" required>
              
				</div>
				</div>
				</div>
				 <div class="col-md-6">
				<div class="box-body"> 
				<div class="form-group">
				  
                  <label for="content">No. of Childrens</label>
					<input type="text" class="form-control" name="childrens"  id="childrens" placeholder="No. of Childrens" required>
                
				</div>
			 </div>
                </div>
				</div>
	 
             <div class="box-body"> 
                <div class="form-group">
                  <label for="content">Message</label>
					<textarea type="text" class="form-control" name="mesage"  id="mesage" placeholder="Message" value="" required></textarea>
                </div>
                </div>
				 
                <div class="box-footer" align="center">
                <input type="submit" name="submit" id="submit" value="Submit"  class="btn btn-primary pill px-4 py-2" onclick="return EnquiryFrm();" style="background-color: #38aee6;
    border-color: #38aee6;">  
              </div>
            </form> 
          </div>

          <div class="col-lg-4 contact_form" data-aos="fade-up" data-aos-delay="200" >
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3" style="margin-top: -51px;">Account Info</h3>
			   <p class="mb-0 font-weight-bold">Bank Details</p>
			    <p class="mb-2 about_cotet">Bank Name:- Indian Overseas Bank  </p> 
				<p class="mb-2 about_cotet">Account No:-083502000000236 </p>
				 <p class="mb-2 about_cotet">IFSC Code:- IOB0000835 </p>
				  <p class="mb-2 about_cotet">Brach Name:-Bota Branch </p>
              <p class="mb-0 font-weight-bold">Address</p>
			  
              <p class="mb-4 about_cotet">Office No 106, 2nd Floor, Abhonkar Lane, Raviwar Karanja, Panchavati, Nashik 422003</p>
			   <p class="mb-0 font-weight-bold">Hotel Vijayashree Landline No.</p>
			    <p class="mb-4 about_cotet"><a  style="color: #7f7f7f;">+91 9665819110</a><br>
 
			  <a  style="color: #7f7f7f;">+91 9665819110</a><br>
		 </p>
              
			   
            </div> <div class="col-lg-4 contact_form">
			  <div class="p-2 mb-3 bg-white">
         
          </div>
		  </div>
          </div>
		   
        </div>
		
      </div>
    </div>
	<!------------- About-------------->

 

<?php
include "footer.php";
?> 

	   <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog"> 
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header"><h4 class="modal-title">Enquiry Form</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
        <div class="modal-body">
     <form  name="enquiryForm" method="post">
              <div class="box-body"> 
			  <div id="signupalert" style="color:#ff0000;"></div>
                <div class="form-group">
                  <label for="content">Your Name</label>
					<input type="text" class="form-control" name="name"  id="name" placeholder="Your Name" required>
                </div>
                </div>
                <div class="box-body"> 
                <div class="form-group">
                  <label for="content">Your Email</label>
					<input type="email" class="form-control" name="emailid"  id="emailid" placeholder="Your Email" required>
                </div>
                </div>
                <div class="box-body"> 
                <div class="form-group">
                  <label for="content">Your Mobile</label>
					<input type="text" class="form-control" name="mobile"  id="mobile" placeholder="Your Mobile" value="" required>
                </div>
                </div>
                <div class="box-body"> 
                <div class="form-group">
                  <label for="content">Rooms</label>
				  <select class="form-control" name="rooms"  id="rooms" placeholder="Select Room"  value=""  required>
				  <option value="">Select Room</option>
				  <option value="Deulex non AC">Deluxe non AC</option>
				  <option value="Deulex AC">Deluxe AC</option>				   
				  <option value="Separate Family Room"> Separate Family Room</option>
				</select>
                </div>
                </div>
				 <div class="row">
				  <div class="col-md-6">  
				<div class="box-body"> 
                <div class="form-group">
				
                  <label for="content">Check - In - Date</label>  
					<input type="date" class="form-control" name="date"  id="date" required>
              
				</div>
				</div>
				</div>
				 <div class="col-md-6">
				<div class="box-body"> 
				<div class="form-group">
				  
                  <label for="content">Check - Out - Date</label>
					<input type="date" class="form-control" name="date1"  id="date1" required>
                
				</div>
			 </div>
                </div>
				</div>
				 <div class="row">
				  <div class="col-md-6">  
				<div class="box-body"> 
                <div class="form-group">
				
                  <label for="content">No. of Adult(s)</label>  
					<input type="text" class="form-control" name="adult"  id="adult" placeholder="No. of Adult" required>
              
				</div>
				</div>
				</div>
				 <div class="col-md-6">
				<div class="box-body"> 
				<div class="form-group">
				  
                  <label for="content">No. of Childrens</label>
					<input type="text" class="form-control" name="childrens"  id="childrens" placeholder="No. of Childrens" required>
                
				</div>
			 </div>
                </div>
				</div>
	 
             <div class="box-body"> 
                <div class="form-group">
                  <label for="content">Message</label>
					<textarea type="text" class="form-control" name="mesage"  id="mesage" placeholder="Message" value="" required></textarea>
                </div>
                </div>
				 
                <div class="box-footer" align="center">
                <input type="button" name="submit" id="submit" value="Submit"  class="btn btn-primary pill px-4 py-2" onclick="return EnquiryFrm();" style="background-color: #38aee6;
    border-color: #38aee6;">  
              </div>
            </form> 
       </div>
     </div> 
  </div>
</div>
<script>
	function EnquiryFrm()
	{	 
		$.ajax({
			type:'POST',
			//cache:false,
			data:'name='+$("#name").val()+'&emailid='+$("#emailid").val()+'&mobile='+$("#mobile").val()+'&rooms='+$("#rooms").val()+'&date='+$("#date").val()+'&date1='+$("#date1").val()+'&adult='+$("#adult").val()+'&childrens='+$("#childrens").val()+'&mesage='+$("#mesage").val(),
			url:'enquiryform.php',
			success: function(result){
				//alert(result);
			//alert(result);
				if(result==true){
					alert("Enquiry sent successfully...");
					window.location.href='http://hotelvijayashree.com;
				}else{
				$("#signupalert").php(result);	
				}
				//$("#clinicim").remove();				
			 }
		});
	}
	</script>  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script> 
  <script src="js/mediaelement-and-player.min.js"></script> 
  <script src="js/main.js"></script> 
  </body>
</html>