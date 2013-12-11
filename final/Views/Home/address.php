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
	
<div class="container">
		
        <form action="?action=saveaddress" method="post" class="form-horizontal row">
        		<input type="hidden" name = "id" value = "<?=$model['id']?>" />
                
                <div class="form-group <?=isset($errors['Users_id']) ? 'has error' : ''   ?>">
                        <label for="Users_id" class="col-sm-2 control-label">Users</label>
                        <div class="col-sm-10">
                                <select name="Users_id" id="Users_id" class="form-control" >
                                        <? foreach(Users::Get() as $keywordRs): ?>
                                                <option value="<?=$keywordRs['id']?>"><?=$keywordRs['LastName']?></option>
                                        <? endforeach; ?>
                                </select>
                        		
                        </div>
                        <? if(isset($errors['Users_id'])): ?><span class = "error"><?=$errors['Users_id'] ?> </span> <? endif;?>
                </div>
                
                <div class="form-group <?=isset($errors['AddressTypes_id']) ? 'has error' : ''   ?>">
                        <label for="AddressTypes_id" class="col-sm-2 control-label">AddressType</label>
                        <div class="col-sm-10">
                                 <select name="AddressTypes_id" id="AddressTypes_id" class="form-control" >
                                        <? foreach(AddressTypes::Get() as $keywordR): ?>
                                                <option value="<?=$keywordR['id']?>"><?=$keywordR['AddressType']?></option>
                                        <? endforeach; ?>
                                </select>		
                        </div>
                        <? if(isset($errors['AddressTypes_id'])): ?><span class = "error"><?=$errors['AddressTypes_id'] ?> </span> <? endif;?>
                </div>
                <div class="form-group <?=isset($errors['Street']) ? 'has error' : ''   ?>">
                        <label for="Password" class="col-sm-2 control-label">Street</label>
                        <div class="col-sm-10">
                                <input type="Street" name="Street" id="Street" placeholder="Street" class="form-control " value="<?=$model['Street']?>" />
                        		<? if(isset($errors['Street'])): ?><span class = "error"><?=$errors['Street'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['State']) ? 'has error' : ''   ?>">
                        <label for="City" class="col-sm-2 control-label">State</label>
                        <div class="col-sm-10">
                                <input type="text" name="State" id="State" placeholder="State" class="form-control " value="<?=$model['State']?>" />
                        		<? if(isset($errors['State'])): ?><span class = "error"><?=$errors['State'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['City']) ? 'has error' : ''   ?>">
                        <label for="City" class="col-sm-2 control-label">City</label>
                        <div class="col-sm-10">
                                <input type="text" name="City" id="City" placeholder="City" class="form-control " value="<?=$model['City']?>" />
                        		<? if(isset($errors['City'])): ?><span class = "error"><?=$errors['City'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['Country']) ? 'has error' : ''   ?>">
                        <label for="Country" class="col-sm-2 control-label">Country</label>
                        <div class="col-sm-10">
                                <input type="text" name="Country" id="Country" placeholder="Country" class="form-control " value="<?=$model['Country']?>" />
                        		<? if(isset($errors['Country'])): ?><span class = "error"><?=$errors['Country'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['ZipCode']) ? 'has error' : ''   ?>">
                        <label for="ZipCode" class="col-sm-2 control-label">ZipCode</label>
                        <div class="col-sm-10">
                                <input type="text" name="ZipCode" id="ZipCode" placeholder="ZipCode" class="form-control " value="<?=$model['ZipCode']?>" />
                        		<? if(isset($errors['ZipCode'])): ?><span class = "error"><?=$errors['ZipCode'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" value="Save" />
                        </div>
                </div>
        </form>
         <a href = "?" type="button" class="btn btn-danger">Cancel</a>
         <a href = "?action=register" type="button" class="btn btn-info">Back</a> 
</div>
</div>
<script type="text/javascript">
        $(function(){
                $("#AddressTypes_id").val(<?=$model['AddressTypes_id']?>);
             	$("#Users_id").val(<?=$model['Users_id']?>);
                
        })
        
</script>