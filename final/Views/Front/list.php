<style>
    	
   		#pic{float:left;margin-top:11px;}
   		.leftText{position:relative;left:10px;}
   		#left{ float:right;       }
   			
</style>

<div class="container">
        <? foreach ($model as $value): ?>
                <div>
                	<ul class="list-group">
                	   <div class="row">
                	      <li class="list-group-item">
                	      		
		                		<a href="?action=details&id=<?=$value['id']?>&format=dialog" data-toggle="modal" data-target="#myModal">
		                		<img  id = "pic" src="<?=$value['src'] ?>" alt="..." class="img-thumbnail" style="width: 120px; height: 120px;">
		                		</a>
		                		<br><br><br>
		                         <div  class= "leftText" ><?=$value['ItemName']?></div>
		                        <div  class= "leftText" >Price: $<?=$value['ItemPrice']?></div>
		                        <button type="button"  id= "left" class="btn btn-success">BUY</button>
		                        <div  class= "leftText" >Item Number #:<?=$value['ItemNumber']?></div> 
		                        
		                       
		                       
		                        
		                        <br>
	                       </li>
	                    </div>
                    </ul>
                </div>
          <div id ="myModal" class="modal fade"  data-backdrop = "static"></div>
        <? endforeach; ?>
</div>
