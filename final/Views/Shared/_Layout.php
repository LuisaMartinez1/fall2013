<!DOCTYPE html>
<html>
	<head>
    <title>E-buy -<?=@$title?></title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <style>
  		 body{padding-top:70px;}
   </style>
   </head>
  <body>
  	<header>
  		<div class="container">
  			<h1>E-buy</h1>
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
          <a class="navbar-brand" href="../Home/" ><div class="glyphicon glyphicon-home "></div> Home</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            	 <li class = "Register">
            	 	<a href="../Register/?action=new">Register</a>
            	 </li>
            	  <li class = "Login">
            	 	<a href="../Auth/?action=login">Login</a>
            	 </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Users <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href= "../Users/">Users</a></li>
                <li><a href = "../Addresses/">Addresses</a></li>
                <li><a href = "../Emails/">Emails</a></li>
                <li><a href = "../CreditCard/">Payment Method</a></li>
                <li><a href = "../PhoneNumbers/">Phone Numbers</a></li>
                <li><a href = "../UsersFeedBack/">User Feed Back</a></li>
                <li><a href = "../WishList/">User Wish List</a></li>	                                   
              </ul>
             </li>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Items <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="../Categories/">Categories</a></li>
                <li><a href="../Items/">Items</a></li>
                <li><a href="../ProductKeyWords/">Product Key Words</a></li>
                <li><a href= "../Suppliers/">Suppliers</a></li>                                   
              </ul>
             </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<b class="caret"></b></a>
              <ul class="dropdown-menu">
             	<li><a href = "../Orders/">Orders</a></li>
                <li><a href= "../Keywords/">Keywords</a></li>
                <li><a href= "../OrderItem/">Ordered Items</a></li>
                <li><a href= "../Shipments/">Shipments</a></li> 
				<li><a href= "../AddressTypes/">AddressTypes</a></li>   
				<li><a href= "../PhoneTypes/">PhoneTypes</a></li>     
				<li><a href= "../EmailTypes/">EmailTypes</a></li>   
				<li><a href= "../Inventory/">Inventory</a></li>   
				<li><a href = "../Orders/">Orders</a></li>                                      
              </ul>
             </li>
          </ul>
          <form class="navbar-text pull-right">
           <div class ="glyphicon glyphicon-user"></div> Signed in as
           <a class ="navbar-link" href="#" >
           	<? $user=Auth::GetUser();echo $user['LastName'];?>
           		
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

		