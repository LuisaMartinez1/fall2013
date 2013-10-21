<!DOCTYPE html>
<html>
	<head>
    <title>Jumbotron Template for Bootstrap</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="jumbotron.css" rel="stylesheet">
    <style>
  		 body{padding-top:70px;}
   </style>
   </head>
  <body>
  	<header>
  		<div class="container">
  			<h1>My website</h1>
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
          <a class="navbar-brand" href="#">Final</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            	 <li class = "Users"> 
             			<a href= "../Users/">Users</a>
            	 </li>
            	 <li class = "Addresses">
            	 	<a href = "../Addresses/">Addresses</a>
            	 </li>
            	 <li class = "Emails">
            	 	<a href = "../Emails/">Emails</a>
            	 </li>
            	  <li class = "Phones">
            	 	<a href = "../PhoneNumbers/">Phone Numbers</a>
            	 </li>
            	 <li class = "UsersFeedBack">
            	 	<a href = "../UsersFeedBack/">User Feed Back</a>
            	 </li>
            	 <li class = "UsersWishList">
            	 	<a href = "../WishList/">User Wish List</a>
            	 </li>
            	 <li class = "Orders">
            	 	<a href = "../Orders/">Orders</a>
            	 </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="../Categories/">Categories</a></li>
                <li><a href="../Items/">Items</a></li>
                <li><a href="../ProductKeyWords/">Product Key Wordd</a></li>
                <li><a href = "../CreditCard/">Credit Card</a></li>
                <li><a href= "../Keywords/">Keywords</a></li>
                <li><a href= "../OrderItem/">Ordered Items</a></li>
                <li><a href= "../Shipments/">Shipments</a></li>
                <li><a href= "../Suppliers/">Suppliers</a></li>
				<li><a href= "../AddressTypes/">AddressTypes</a></li>   
				<li><a href= "../PhoneTypes/">PhoneTypes</a></li>     
				<li><a href= "../EmailTypes/">EmailTypes</a></li> 
				<li><a href= "../ItemsSold/">Number Of Items Sold</a></li>   
				<li><a href= "../Inventory/">Inventory</a></li>   	                                   
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

		