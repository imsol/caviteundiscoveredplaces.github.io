<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/gh.css"/> 
	<link rel="stylesheet" type="text/css" href="../assets/css/carousel.css"/>
	<link rel="icon" type="image/png" href="../assets/img/logoCUP.png" />
  <style type="text/css">

.red{
    color:red;
    }
.form-area
{
    background-color: transparent;
  padding: 10px 40px 60px;
  margin: 10px 0px 60px;
  border: 1px solid GREY;
  }
  #contact {
    background-color: rgba(201, 202, 0, 0.44);
  }
  </style>
</head>
<body>
	<div class="container">
		<?php include('guestheader.php'); ?>
	</div>

	<div class="meat">		
    <div class="container">
      <div class="col-lg-3">
  <p>feel free to send us message if there's an error or you want to suggest. We will assure that we read that and will reponse as fast as possible. Thank you! </p>
  <img src="../assets/img/design/line.png" style=" float: right;"  >
</div>
<div class="col-lg-6 col-md-5">
    <div class="form-area">  
        <form role="form">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;"><p class="ftitle">Contact</p></h3>
            <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
          </div>
            <div class="form-group">
            <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                <span class="help-block"><p id="characterLeft" class="help-block" style="color: #ffffff;">You have reached the limit</p></span>                    
            </div>
            
        <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
        </form>
    </div>
</div>

<div class="col-lg-3">
  <p>this is advertisement</p>
</div>
</div>	
	</div>
  <script type="text/javascript">
    $(document).ready(function(){ 
    $('#characterLeft').text('140 characters left');
    $('#message').keydown(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });    
});

  </script>
	
</body>
</html>