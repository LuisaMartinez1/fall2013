<style>
	#pic{float:left;margin-top:5px;}
   	.leftText{position:relative;left:20px;}
</style>
<div class="container">
	<dl class="dl-horizontal">
	    <dt><img id ="pic" src="<?=$model['src'] ?>"  class="img-thumbnail" height = "200px " width ="200px " ></dt>
		
		<strong></b><div class="leftText"><?=$model['ItemName']?></div></strong>
		<br>
		<li class="leftText"><?=$model['description']?></li>
		<li class="leftText">Item Number: <?=$model['ItemNumber']?></li>
		<li class="leftText">Category: <?=$model['Categories']?></li>
		<br>
		<div class="leftText"  style="color: #A80000">Items in Stock: <?=$model['Inventories']?></div>
	</dl>
</div>