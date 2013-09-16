<?
	$pages = array(
			 array(	
			'url' => 'index.php',
			'section' => 'home',
			'tittle' => 'Home'
			),
			'links' => array('url'=>'link.php',
			'section' =>'links',
			'title' => 'Links'
			),
			'contacs' => array('url'=> 'contacts.php',
			'section'=> 'contac',
			'title' => 'Contact')
			);
			
			$pages[] =  array(
			'url'=> 'store.php',
			'section'=> 'store',
			'title' => 'Buy our stuff'
			);
	
	
?>


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
            <li class = "<? if($location == 'home') echo 'active'; ?>" ><a href="./">Home</a></li>
            <li class = "<? if($location == 'contact') echo 'active'; ?>"><a href="contact.php">Contact </a></li>
            <li class = "<? if($location == 'links') echo 'active';?>"><a href="links.php">Links</a></li>
            
            <?foreach($pages as $name => $data): ?>
            	<li class = "<?=($data['section'])?> ">
             		<a href= "<?= $data['url']?>"> <?=$data['title']?> </a>
             	</li>
            <? endforeach; ?> 		
			 
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
	