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
                
                <div class="form-group <?=isset($errors['ItemName']) ? 'has error' : ''   ?>">
                        <label for="ItemName" class="col-sm-2 control-label">ItemName</label>
                        <div class="col-sm-10">
                                <input type="text" name="ItemName" id="ItemName" placeholder="ItemName" class="form-control " value="<?=$model['ItemName']?>" />
                        		<? if(isset($errors['ItemName'])): ?><span class = "error"><?=$errors['ItemName'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['ItemPrice']) ? 'has error' : ''   ?>">
                        <label for="ItemPrice" class="col-sm-2 control-label">ItemPrice</label>
                        <div class="col-sm-10">
                                <input type="text" name="ItemPrice" id="ItemPrice" placeholder="ItemPrice" class="form-control " value="<?=$model['ItemPrice']?>" />
                       			<? if(isset($errors['ItemPrice'])): ?><span class = "error"><?=$errors['ItemPrice'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['Categories_id']) ? 'has error' : ''   ?>">
                        <label for="Categories_id" class="col-sm-2 control-label">Categories </label>
                        <div class="col-sm-10">
                                <input type="Categories_id" name="Categories_id" id="Categories_id" placeholder="Categories_id" class="form-control " value="<?=$model['Categories_id']?>" />
                        		<? if(isset($errors['Categories_id'])): ?><span class = "error"><?=$errors['Categories_id'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['ItemNumber']) ? 'has error' : ''   ?>">
                        <label for="ItemNumber" class="col-sm-2 control-label">ItemNumber</label>
                        <div class="col-sm-10">
                                <input type="text" name="ItemNumber" id="ItemNumber" placeholder="ItemNumber" class="form-control " value="<?=$model['ItemNumber']?>" />
                        		<? if(isset($errors['ItemNumber'])): ?><span class = "error"><?=$errors['ItemNumber'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['Inventories_id']) ? 'has error' : ''   ?>">
                        <label for="Inventories_id" class="col-sm-2 control-label">Inventories_id</label>
                        <div class="col-sm-10">
                                <input type="text" name="Inventories_id" id="Inventories_id" placeholder="Inventories_id" class="form-control " value="<?=$model['Inventories_id']?>" />
                        		<? if(isset($errors['Inventories_id'])): ?><span class = "error"><?=$errors['Inventories_id'] ?> </span> <? endif;?>
                        </div>
                </div>
                  <div class="form-group <?=isset($errors['ProductKeyWords_id']) ? 'has error' : ''   ?>">
                        <label for="ProductKeyWords_id" class="col-sm-2 control-label">ProductKeyWords_id</label>
                        <div class="col-sm-10">
                                <input type="text" name="ProductKeyWords_id" id="ProductKeyWords_id" placeholder="ProductKeyWords_id" class="form-control " value="<?=$model['ProductKeyWords_id']?>" />
                        		<? if(isset($errors['ProductKeyWords_id'])): ?><span class = "error"><?=$errors['ProductKeyWords_id'] ?> </span> <? endif;?>
                        </div>
                </div>
                 <div class="form-group <?=isset($errors['Fall2013_ItemsSold_id']) ? 'has error' : ''   ?>">
                        <label for="ProductKeyWords_id" class="col-sm-2 control-label">Fall2013_ItemsSold_id</label>
                        <div class="col-sm-10">
                                <input type="text" name="Fall2013_ItemsSold_id" id="Fall2013_ItemsSold_id" placeholder="Fall2013_ItemsSold_id" class="form-control " value="<?=$model['Fall2013_ItemsSold_id']?>" />
                        		<? if(isset($errors['Fall2013_ItemsSold_id'])): ?><span class = "error"><?=$errors['Fall2013_ItemsSold_id'] ?> </span> <? endif;?>
                        </div>
                </div>
                
                
                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" value="Save" />
                        </div>
                </div>
        </form>
</div>