

<html>

<head>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src='captcha.js'></script>
    <style>
p {
  text-align: center;
  margin-top: 0px;
}
</style>
</head>
<body>

<div class="container" style="width: 600px">
   <br />
   
   <h3 align="center">Entry Form For Aleum</a></h3><br />   <br />

   <div class="panel panel-default">
      <div class="panel-heading"><p>Register by Filling Up Correct Details</p>
          
<p id="demo"></p>

<script>
  

 var countDownDate = new Date("September 27, 2021 12:37:25").getTime();


 var x = setInterval(function() {

  var now = new Date().getTime();

 var distance = 180000 - 0;      
    
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
   document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s ";
    
   if (distance < 0) {
    clearInterval(x);
  document.getElementById("demo").innerHTML = "EXPIRED";
     header("location:\index.php")
   }
 }, 1000); 
 </script>

      </div>

      <div class="panel-body">
<form action="" method="post" id = "captch_form"><div class="form-group">

    
<label>Name</label>
<input type="text" name="name" id="name" class="form-control" ></div>

<div class="form-group">
       <label>Date Of Birth</label>
<input type="date" name="dob" class="form-control" > </div>
<div class="form-group">
       <label>Email Address</label>
<input type="email" name="email" class="form-control"></div>

<div class="form-group">
       <label>About Yourself</label>

<input type="aboutyourself" name="aboutyourself" class="form-control" ></div>

<div class="form-group">
       <div class="form-group">
                          <label>Enter Captcha</label>
                          <div class="input-group">
                           <input type="text" name="captcha_code" id="captcha_code" class="form-control" />
                           <span class="input-group-addon" style="padding:0">
          <img src="image.php" id="captcha_image" />
         </span>
                          </div>
                         </div>
</div>
<div class="form-group">
<input type="submit" value="Sign Up" id = "submit" class="btn btn-info" name="submit"></div>


</form>
</div>
</div>
    
</div>



</body>
</html>
