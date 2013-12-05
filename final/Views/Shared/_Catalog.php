<!DOCTYPE html>
<html>
	<head>
    <title>My Website-<?=@$title?></title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <style>
  		 body{padding-top:70px;}
   </style>
   </head>
  <body style="background-color: #F8F8F8 ">
  	<header>
  	
  		<div class="container" >
	  		<div class="page-header" >
	  			<h1 id ="navbar" style=" color:#000066; font-family:Fantasy">Catalog</h1>
	  		</div>
	    </div>
  	</header>
  	
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
     <div class="container">
       <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../Front/">Home</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">	 
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories<b class="caret"></b></a>
              <ul class="dropdown-menu">
              			<li>
              				<a href = "../Front/">All Products</a>
              			</li>
                
                		<? foreach(Categories::Get() as $word): ?>
	                		<li>
		                		<a href="?action=category&id=<?=$word['id']?>">
		                			<?=$word['CategoryName']?>
		                		</a>
	                		 </li>
                		<? endforeach; ?>
                                                
              </ul>
             </li>
          </ul>
          <form class="navbar-text pull-right">
           Signed in as 
           <a class ="navbar-link" href="#" >
           		Luisa Martinez
           </a>
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

		