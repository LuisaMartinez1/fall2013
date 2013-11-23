<style>
    	
   		#pic{float:left;margin-top:11px;}
   		.leftText{position:relative;left:10px;}
   		#left{ float:right;}
   		.container2 {
					padding-right: 200px;
					padding-left: 200px;
					margin-right: auto;
					margin-left: auto;
					}
   			  			
</style>

<div class="container2">
        <? foreach ($model as $value): ?>
                <div>
                	<ul class="list-group">
                	   <div class="row">
                	      <li class="list-group-item">
                	      		<div class ="media">
			                		<a class="pull-left" href="?action=details&id=<?=$value['id']?>&format=dialog" data-toggle="modal" data-target="#myModal">
			                		<img  id = "pic" src="<?=$value['src'] ?>" alt="..." class="img-thumbnail" style="width: 180px; height: 180px;">
			                		</a>
			                		<br>
			                		<div class= "media-body">
				                        <h3 class= "media-heading" style=" color:#000066 " ><?=$value['ItemName']?></h3>
				                        <div >Item Number #:<?=$value['ItemNumber']?></div> 
				                       
				                        Rating: 
				                        <span class="glyphicon glyphicon-star"></span>
				                        <span class="glyphicon glyphicon-star"></span>
				                        <span class="glyphicon glyphicon-star"></span>
				                        <span class="glyphicon glyphicon-star"></span>
				                        <span class="glyphicon glyphicon-star"></span>
				                        <div style="font-size:18px; color: #A80000 "  >Price: $<?=$value['ItemPrice']?></div>
				                        <br><br>             
			                        </div>
			                         <button type="button" class="btn btn-info" href = "?action=details&id=<?=$value['id']?>&format=dialog" data-toggle="modal" data-target="#myModal">Details</button>
				                	 <button type="button" id= "left" class="btn btn-success">BUY</button>        
		                        </div>
		                        <br>
	                       </li>
	                    </div>
                    </ul>
                </div>
          <div id ="myModal" class="modal fade"  data-backdrop = "static"></div>
        <? endforeach; ?>
</div>
