<style type = "text/css">
	.error{color:red;}
</style>


<div class="container">
	
	<? if(isset($errors)&& $errors): ?>
		<ul class="error">
			<? foreach ($errors as $key => $value): ?>
				<li>
					<label><?=$key?>:</label><?=$value?>
				</li>
				
			<? endforeach; ?>
		</ul>
	<?  endif; ?>
	
	
        <form action="?action=save" method="post" class="form-horizontal row">
        		<input type="hidden" name = "id" value = "<?=$model['id']?>" />
                
                <div class="form-group <?=isset($errors['Orders_id']) ? 'has error' : ''   ?>">
                        <label for="Orders_id" class="col-sm-2 control-label">Orders_id</label>
                        <div class="col-sm-10">
                                <input type="text" name="Orders_id" id="Orders_id" placeholder="Orders_id" class="form-control " value="<?=$model['Orders_id']?>" />
                        		<? if(isset($errors['Orders_id'])): ?><span class = "error"><?=$errors['Orders_id'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['Items_id']) ? 'has error' : ''   ?>">
                        <label for="Items_id" class="col-sm-2 control-label">Items_id</label>
                        <div class="col-sm-10">
                                <input type="text" name="Items_id" id="Items_id" placeholder="Items_id" class="form-control " value="<?=$model['Items_id']?>" />
                       			<? if(isset($errors['Items_id'])): ?><span class = "error"><?=$errors['Items_id'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" value="Save" />
                        </div>
                </div>
        </form>
</div>