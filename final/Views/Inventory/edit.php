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
                
                <div class="form-group <?=isset($errors['Quantaty']) ? 'has error' : ''   ?>">
                        <label for="Quantaty" class="col-sm-2 control-label"> Quantaty</label>
                        <div class="col-sm-10">
                                <input type="text" name="Quantaty" id="Quantaty" placeholder=" Quantaty" class="form-control " value="<?=$model['Quantaty']?>" />
                        		<? if(isset($errors['Quantaty'])): ?><span class = "error"><?=$errors['Quantaty'] ?> </span> <? endif;?>
                        </div>
                </div>
                 <div class="form-group <?=isset($errors['QuantatySold']) ? 'has error' : ''   ?>">
                        <label for="QuantatySold" class="col-sm-2 control-label"> QuantatySold</label>
                        <div class="col-sm-10">
                                <input type="text" name="QuantatySold" id="QuantatySold" placeholder=" QuantatySold" class="form-control " value="<?=$model['QuantatySold']?>" />
                        		<? if(isset($errors['QuantatySold'])): ?><span class = "error"><?=$errors['QuantatySold'] ?> </span> <? endif;?>
                        </div>
                </div>
               
               
                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" value="Save" />
                        </div>
                </div>
        </form>
</div>