
<? $location = 'contact'; ?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Signin Template for Bootstrap</title>
	<!-- Bootstrap core CSS -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport"></meta>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"></link>
      
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
    <style>
    #box{width:500px; float:left;position:relative;margin-right:3px;}
    #right{margin-right:-75px;}
    #text{position:relative;left:650px;}
    body{padding-top:70px;}
    
   
    </style>
  </head>
  <body>
   	 <? include 'header.php' ?>
   	 <div class= "container">
  	 	<pre>
  			<?echo json_encode($pages,1) ;?>
  		</pre> 
  	</div>
	<div class="container" id="head">
		<div class = "well">
      		<h1>Hello world!</h1>
        	<font size ="3">Welcome class of 2013 to Web Server Programming</font>
        	<a class="btn btn-md btn-default" href="../../components/#navbar">Learn more</a>
     	
   	   </div>
	</div>
	
    <!--<h2  id="text">Contact Us</h2>-->
<div class= "container">
  <div class = "row">
  	<div class="col-md-3"></div>
  	<div class="col-md-4"><h2>Contact Us</h2></div>
  	<div class="col-md-4"></div> 
  </div>
  <form class="form-horizontal" role="form">
   <div class="form-group">
  	<div class="row">
    	<label for="inputEmail1" class="col-md-4 control-label">Your Email</label>
    	<div class="col-lg-4">
      	<input type="email" class="form-control" id="inputEmail1" placeholder="Email">
    	</div>
    </div>
  </div>
  <div class="form-group">
  	<div class="row">
    	<label for="inputPassword1" class="col-md-4 control-label">Message</label>
    	<div class="col-lg-4">
      	<textarea type="password" class="form-control" id="inputPassword1" placeholder="Message" cols="10" rows="2"></textarea>
    	</div>
    </div>
  </div>
  <div class="form-group">
  	<div class="row">
  		<div class="col-lg-2"></div>
    	<div class="col-lg-offset-2 col-lg-6">
      	<button type="submit" class="btn btn-default">Submit</button>
    	</div>
    </div>
  </div>
</div>
</form>
	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="script/main.js"></script>
    <script type="text/javascript">
	 	$(function(){
	 		$(" .nav .contact").addClass("active");
	 	});
	 </script>   
  </body>
</html>

 
