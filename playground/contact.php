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
     		width:500px; }
    #right{
    	margin-right:-75px;}
    #text{
    	position:relative;
 		left:350px;
    }
    #head{
    	margin-top: 60px;
    }
   
    </style>
  </head>
  <body>
   

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Playground</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active">
            	<a href="./">Home</a></li>
            <li>
            	<a href="contact.php">Contact </a></li>
             <li>
             	<a href="links.php">Links</a></li>
              <li class="dropdown">
              	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              	<ul class="dropdown-menu">
                	<li><a href="#">Action</a></li>
                	<li><a href="#">Another action</a></li>
                	<li><a href="#">Something else here</a></li>
                	<li class="divider"></li>
                	<li class="dropdown-header">Nav header</li>
                	<li><a href="#">Separated link</a></li>
                	<li><a href="#">One more separated link</a></li>
              	</ul>
             </li>
		 </ul>
	     <form class="navbar-text pull-right">Signed in as
	       	<a class ="navbar-link" href="#" >Luisa Martinez</a>
         </form>
       </div><!--/.navbar-collapse -->
      </div>
    </div>
    <div class="container" id="head">
      <div class="jumbotron">
        <h2>Hello world!</h2>
        <font size ="3">Welcome class of 2013 to Web Server Programming</font>
        	<a class="btn btn-md btn-default" href="../../components/#navbar">Learn more</a>
      </div>	
    </div>
    <h2  id="text">Contact Us</h2>
    <div class="container" id="right">
     	<form class="form-signin">
         
        	<lable>Email </lable>
        	<input id="box" type="text" class="form-control" placeholder="Email address" autofocus>
        	<br>
        	<label>Message </label>
  			<textarea id ="box" name="comments" class="form-control" cols="10" rows="2" placeholder="Message goes here"></textarea><br>
		</form>
        
        <button class="btn btn-md" type="submit">Submit</button>
    </div> <!-- /container --> 
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
     
    
  </body>
</html>

 
