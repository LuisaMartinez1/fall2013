<div class ="container">
	
		<h3>
			Are you sure you want to delete <?=$model['Fall2013_Items_id'] ?>
		</h3>
		
    <form action ="?action=delete" method ="post">
    	<input type="hidden" name = "id" value="<?=$model['id']?>" />
    	<input type="submit" class="btn btn-primary" value="Delete" />
    	<a href ="?action=list">No,your right.</a>
	</form>
	
</div>
