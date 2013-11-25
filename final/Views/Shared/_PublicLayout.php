<!DOCTYPE html>
<html>
	<head>
    <title>My Website -  <?=@$title?></title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="jumbotron.css" rel="stylesheet">
    
   </head>
  <body>
  	<header>
  		<div class="container">
  			<h1>My website</h1>
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
          <a class="navbar-brand" href="../Front/">Home</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            	 
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="../Categories/">Categories</a></li>
                <li><a href="../Items/">Items</a></li>
                <li><a href="../ProductKeyWords/">Product Key Words</a></li>
                <li><a href = "../CreditCard/">Payment Method</a></li>
                <li><a href= "../Keywords/">Keywords</a></li>
                <li><a href= "../OrderItem/">Ordered Items</a></li>
                <li><a href= "../Shipments/">Shipments</a></li>
                <li><a href= "../Suppliers/">Suppliers</a></li>
				<li><a href= "../AddressTypes/">AddressTypes</a></li>   
				<li><a href= "../PhoneTypes/">PhoneTypes</a></li>     
				<li><a href= "../EmailTypes/">EmailTypes</a></li>   
				<li><a href= "../Inventory/">Inventory</a></li>   	                                   
              </ul>
             </li>
             
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Account <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="../Categories/">Categories</a></li>
                <li><a href="../Items/">Items</a></li>
                <li><a href="../ProductKeyWords/">Product Key Words</a></li>
                <li><a href = "../CreditCard/">Payment Method</a></li>
                <li><a href= "../Keywords/">Keywords</a></li>
                <li><a href= "../OrderItem/">Ordered Items</a></li>
                <li><a href= "../Shipments/">Shipments</a></li>
                <li><a href= "../Suppliers/">Suppliers</a></li>
				<li><a href= "../AddressTypes/">AddressTypes</a></li>   
				<li><a href= "../PhoneTypes/">PhoneTypes</a></li>     
				<li><a href= "../EmailTypes/">EmailTypes</a></li>   
				<li><a href= "../Inventory/">Inventory</a></li>   	                                   
              </ul>
             </li>
             
           
             
             
          </ul>
          <form class="navbar-text pull-right" id="shopping-cart">
           
           <a class ="navbar-link" href="#" >
           		Cart
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

		