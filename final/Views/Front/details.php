<style>
	#pic{float:left;margin-top:5px;}
   	.leftText{position:relative;left:20px;}
</style>

<div class="container">
	<dl class="dl-horizontal">
	    <dt><img id ="pic" src="<?=$model['src'] ?>"  class="img-thumbnail" height = "200px " width ="200px " ></dt>
		
		<b></b><div class="leftText"><?=$model['ItemName']?></div></b>
		
		<li class="leftText"><?=$model['description']?></li>
	</dl>
</div>