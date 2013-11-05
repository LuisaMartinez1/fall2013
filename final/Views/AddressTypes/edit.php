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
                
                <div class="form-group <?=isset($errors['AddressType']) ? 'has error' : ''   ?>">
                        <label for="AddressType" class="col-sm-2 control-label">EmailType</label>
                        <div class="col-sm-10">
                                <input type="text" name="AddressType" id="AddressType" placeholder=" AddressType" class="form-control " value="<?=$model['AddressType']?>" />
                        		<? if(isset($errors['AddressType'])): ?><span class = "error"><?=$errors['AddressType'] ?> </span> <? endif;?>
                        </div>
                </div>
               
                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" value="Save" />
                        </div>
                </div>
        </form>
</div>