
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
    #box{
     		width:500px; 
     		float:left;
     		position:relative;
 			margin-right:3px;
 			}
    #right{margin-right:-75px;}
    #text{
    	position:relative;
 		left:300px;
    }
   
    .align{
    position:relative;
 		right:590px;
    }
   
    </style>
  </head>
  <body>
   

        <? include 'header.php' ?>

    <h2  id="text">Contact Us</h2>
    <div class="container" id="right">
     	<form class="form-signin">
         
        	<lable class ="align">Your Email </lable>
        	<input id="box" type="text" class="form-control" placeholder="Email address" autofocus>
        	<br>
        	<br>
        	<br>
        	<label class="align"> Message </label>
  			<textarea id ="box" name="comments" class="form-control" cols="10" rows="2" placeholder="Message goes here"></textarea><br>
		</form>
        <br>
        <br>
        <br>
        <button class="btn btn-md" type="submit">Submit</button>
    </div> <!-- /container --> 
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    
     
    
  </body>
</html>

 
