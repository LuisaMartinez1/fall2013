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
                <div class="form-group <?=isset($errors['Fall2013_Items_id']) ? 'has error' : ''   ?>">
                        <label for="Fall2013_Items_id" class="col-sm-2 control-label">Items</label>
                        <div class="col-sm-10">
                                <select name="Fall2013_Items_id" id="Fall2013_Items_id" class="form-control" >
                                        <? foreach(Items::Get() as $keywordRs): ?>
                                                <option value="<?=$keywordRs['id']?>"><?=$keywordRs['ItemName']?></option>
                                        <? endforeach; ?>
                                </select>
                       			
                        </div>
                        <? if(isset($errors['Fall2013_Items_id'])): ?><span class = "error"><?=$errors['Fall2013_Items_id'] ?> </span> <? endif;?>
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
                $("#Fall2013_Items_id").val(<?=$model['Fall2013_Items_id']?>);
        })
</script>