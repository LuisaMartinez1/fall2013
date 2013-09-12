 <div class="container">
 
    <nav class="navbar navbar-default" role="navigation">
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
            <li class = "<? if($location == 'home') echo 'active'; ?>" ><a href="./">Home</a></li>
            <li class = "<? if($location == 'contact') echo 'active'; ?>"><a href="contact.php">Contact </a></li>
            <li class = "<? if($location == 'links') echo 'active';?>"><a href="links.php">Links</a></li>
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




<div class="container" id="head">
	<div class = "well">
      <h1>Hello world!</h1>
        <font size ="3">Welcome class of 2013 to Web Server Programming</font>
        	<a class="btn btn-md btn-default" href="../../components/#navbar">Learn more</a>
     	
    </div>
</div>