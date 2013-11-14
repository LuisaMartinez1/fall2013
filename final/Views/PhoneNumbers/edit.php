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
                <div class="form-group <?=isset($errors['PhoneTypes_id']) ? 'has error' : ''   ?>">
                        <label for="PhoneTypes_id" class="col-sm-2 control-label">PhoneType</label>
                        <div class="col-sm-10">
                                <select name="PhoneTypes_id" id="PhoneTypes_id" class="form-control" >
                                        <? foreach(PhoneTypes::Get() as $keywordRs): ?>
                                                <option value="<?=$keywordRs['id']?>"><?=$keywordRs['nameType']?></option>
                                        <? endforeach; ?>
                                </select>
                       			
                        </div>
                        <? if(isset($errors['PhoneTypes_id'])): ?><span class = "error"><?=$errors['PhoneTypes_id'] ?> </span> <? endif;?>
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
<script type="text/javascript">
        $(function(){
                $("#PhoneTypes_id").val(<?=$model['PhoneTypes_id']?>);
                $("#Users_id").val(<?=$model['Users_id']?>);
        })
</script>