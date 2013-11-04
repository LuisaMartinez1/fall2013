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
                
                <div class="form-group <?=isset($errors['NameType']) ? 'has error' : ''   ?>">
                        <label for="NameType" class="col-sm-2 control-label"> NameType</label>
                        <div class="col-sm-10">
                                <input type="text" name="NameType" id="NameType" placeholder=" NameType" class="form-control " value="<?=$model['NameType']?>" />
                        		<? if(isset($errors['NameType'])): ?><span class = "error"><?=$errors['NameType'] ?> </span> <? endif;?>
                        </div>
                </div>
               
                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" value="Save" />
                        </div>
                </div>
        </form>
</div>