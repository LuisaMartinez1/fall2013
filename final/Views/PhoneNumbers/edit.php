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
                
                <div class="form-group <?=isset($errors['Users_id']) ? 'has error' : ''   ?>">
                        <label for="Users_id" class="col-sm-2 control-label">Users_id</label>
                        <div class="col-sm-10">
                                <input type="text" name="Users_id" id="Users_id" placeholder="Users_id" class="form-control " value="<?=$model['Users_id']?>" />
                        		<? if(isset($errors['Users_id'])): ?><span class = "error"><?=$errors['Users_id'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['PhoneTypes_id']) ? 'has error' : ''   ?>">
                        <label for="PhoneTypes_id" class="col-sm-2 control-label">PhoneTypes_id</label>
                        <div class="col-sm-10">
                                <input type="text" name="PhoneTypes_id" id="PhoneTypes_id" placeholder="PhoneTypes_id" class="form-control " value="<?=$model['PhoneTypes_id']?>" />
                       			<? if(isset($errors['PhoneTypes_id'])): ?><span class = "error"><?=$errors['PhoneTypes_id'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['value']) ? 'has error' : ''   ?>">
                        <label for="Password" class="col-sm-2 control-label">value</label>
                        <div class="col-sm-10">
                                <input type="value" name="value" id="value" placeholder="value" class="form-control " value="<?=$model['value']?>" />
                        		<? if(isset($errors['value'])): ?><span class = "error"><?=$errors['value'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" value="Save" />
                        </div>
                </div>
        </form>
</div>