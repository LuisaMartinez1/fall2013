<html>
	<head>
    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->

     <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
    <style>
   body{padding-top:70px;}
   </style>
  </head>
  <body>
  	<header>
  		<div class="container">
  			My website
  		</div>
  	</header>
  	</header>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
            <li class = "keywords"> 
            	
             		<a href= "../Keyword.php/"> </a>
             </li>
             <li class = "Users"> 
            	
             		<a href= "../Users.php/"> </a>
             </li>
           	
			 
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
             </li>
          </ul>
          <form class="navbar-text pull-right">
           Signed in as 
           <a class ="navbar-link" href="#" >
           		Luisa Martinez
           </a>
          </form>
        </div><!--/.navbar-collapse -->
      </nav>
    </div>
  
      <? include $view; ?>
    
 	 <script src="http://code.jquery.com/jquery.js"></script>
     <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
     <script src="script/main.js"></script>
	 <? if(function_exists('Scripts')) Scripts();?>
	 	
	 </script> 
  </body>
</html>

		