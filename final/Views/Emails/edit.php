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
                        <label for="Users_id" class="col-sm-2 control-label">User</label>
                        <div class="col-sm-10">
                                <select name="Users_id" id="Users_id" class="form-control" >
                                        <? foreach(Users::Get() as $keywordRs): ?>
                                                <option value="<?=$keywordRs['id']?>"><?=$keywordRs['LastName']?></option>
                                        <? endforeach; ?>
                                </select>
                        		
                        </div>
                          <? if(isset($errors['Users_id'])): ?><span class = "error"><?=$errors['Users_id'] ?> </span> <? endif;?>
                </div>
                <div class="form-group <?=isset($errors['Email']) ? 'has error' : ''   ?>">
                        <label for="Email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                                <input type="text" name="Email" id="Email" placeholder="Email" class="form-control " value="<?=$model['Email']?>" />
                       			<? if(isset($errors['Email'])): ?><span class = "error"><?=$errors['Email'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['EmailTypes_id']) ? 'has error' : ''   ?>">
                        <label for="Email_Types_id" class="col-sm-2 control-label">Email Type</label>
                        <div class="col-sm-10">
                                <select name="EmailTypes_id" id="EmailTypes_id" class="form-control" >
                                        <? foreach(EmailTypes::Get() as $keywordRs): ?>
                                                <option value="<?=$keywordRs['id']?>"><?=$keywordRs['EmailType']?></option>
                                        <? endforeach; ?>
                                </select>
                        </div>
                        	<? if(isset($errors['EmailTypes_id'])): ?><span class = "error"><?=$errors['EmailTypes_id'] ?> </span> <? endif;?>  
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
                $("#Users_id").val(<?=$model['Users_id']?>);
                $("#EmailTypes_id").val(<?=$model['EmailTypes_id']?>);
        })
</script>