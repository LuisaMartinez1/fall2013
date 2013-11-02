<div class ="container">
	
		<h3>
			Are you sure you want to delete <?=$model['Street'] ?><?=$model['City'] ?><?=$model['Country'] ?>
		</h3>
		
    <form action ="?action=delete" method ="post">
    	<input type="hidden" name = "id" value="<?=$model['id']?>" />
    	<input type="submit" class="btn btn-primary" value="Delete" />
    	<a href ="?action=list">No,your right.</a>
	</form>
</div>
