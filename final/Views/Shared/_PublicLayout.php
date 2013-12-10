<!DOCTYPE html>
<html>
	<head>
    <title>My Website -  <?=@$title?></title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />
 </head>
  <body>
  	<header>
  		<div class="container">
  			<h1 style=" color:#000066">Home</h1>
  		</div>
  	</header>
<div class="container"> 	
  <nav class="navbar navbar-default" role="navigation">
    
       <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../Home/">Home</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">  
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Account <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="../Auth/?action=login">Login</a></li>    
                <li><a href="../Users/?action=new">Register</a></li>                                        
              </ul>
             </li>
             
          </ul>
          <form class="navbar-text pull-right" id="shopping-cart">
          	<a href="#" class="navbar-link">Cart</a>
          </form>
        </div>
      </nav>
   </div>
		 <? include $view; ?>
    
 	 <script src="http://code.jquery.com/jquery.js"></script>
     <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
     <script src="script/main.js"></script>
	 <? if(function_exists('Scripts')) Scripts();?>
  </body>
</html>

		