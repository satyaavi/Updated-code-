<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title> stripe payment </title>
	<link rel="stylesheet" href="styles.css" />
    <script src="https://js.stripe.com/v3/"></script>
     <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


   <!-- divider script -->
    <link  rel="stylesheet"href="assets/css/remote-style.css">
<style>input
{ border:1px solid grey;
	border-radius:5px;
	width:100%; padding:10px;
	margin:10px;
}
</style>

  <?php include('includes/header.php');?>

    <br><br>
</head>
<body style="background-color:#ffffff;">
    
    <div class="container mt-3">
    	<div class="row">
    		<div class="col-md-3"></div>
    		<div class="col-md-7 ">
        <div class="card" >
        	<div style="background:#EEF2F4;color:#5D6F78;text-align:center;border-bottom: 1px solid #DEDEDE">
        		<h1 style=" font-size:24px;font-weight:300;font-family:'Poppins';padding:20px">Pay Invoice Online</h1>
        	</div>  
        	<h4 class="text-center " style="color:#3AD5A0;font-weight:600;margin:15px;font-size:18px">Personal information</h4>
       
        
        <!-- Payment form -->
        <form action="charge.php" method="POST" id="paymentFrm" class="p-3 text-center">
        	
        	<div class="row">
        		<div class="col-md-6">
            <div class="form-group">
                <input type="text" name="name" id="name" class="field" placeholder="First name" required="" autofocus="">
            </div></div>
            <div class="col-md-6">
            <div class="form-group">
                <input type="text" name="name" id="name_l" class="field" placeholder="Last name"  autofocus="">
            </div></div>
            <div class="col-md-6">


            <div class="form-group">
                
                <input type="email" name="email" id="email" class="field" placeholder="Email" required="">
            </div></div>
        <div class="col-md-6">
            <div class="form-group">
                
                <input type="text" name="invoice" id="invoice" class="field" placeholder="Invoice No.(Optional)">
            </div></div>
        <div class="col-md-6">
            <div class="form-group">
                
                <input type="text" name="amount" id="amount" class="field" placeholder="Amount(in $)" required="">
            </div></div>
        <div class="col-md-6">
            <div class="form-group">
                
                <input type="text" name="phone" id="phone" class="field" placeholder="Phone No.(Optional)">
            </div>
        </div>
    </div>
            <h4 class="text-center " style="color:#3AD5A0;font-weight:600;margin:15px;font-size:18px">Payment information</h4>
            <div class ="float-right mb-3"><img src="https://www.evirtualservices.com/images/cards.png"></div>
            <div class="row">
            	<div class="col-md-9">
            <div class="form-group ">
                <div id="card_number" class="field"></div>
            </div></div>
<div class="col-md-9">
           <div class="form-group ">
                    <div id="card_expiry" class="field"></div>
                    </div></div>
                    <div class ="col-md-9">
                    <div class="form-group">
                        <div id="card_cvc" class="field"></div>
                    </div></div></div>
            <button type="submit" class="btn btn-success" id="payBtn">Submit Payment</button>
        </form>
        <div  id="paymentResponse" class="p-4" style="color:red"></div>
    </div></div></div></div>


<script src="card.js"></script>
    <br>
    <br>
    <br>
<?php include('includes/footer.php');?>
<?php include('call.php');?>
 <script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(110858)</script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>