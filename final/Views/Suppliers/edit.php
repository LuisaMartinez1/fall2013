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
                
                <div class="form-group <?=isset($errors['SuplierName']) ? 'has error' : ''   ?>">
                        <label for="SuplierName" class="col-sm-2 control-label">Suplier Name</label>
                        <div class="col-sm-10">
                                <input type="text" name="SuplierName" id="SuplierName" placeholder="SuplierName" class="form-control " value="<?=$model['SuplierName']?>" />
                        		<? if(isset($errors['SuplierName'])): ?><span class = "error"><?=$errors['SuplierName'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['Fall2013_Items_id']) ? 'has error' : ''   ?>">
                        <label for="Fall2013_Items_id" class="col-sm-2 control-label">Item</label>
                        <div class="col-sm-10">
                               <select name="Fall2013_Items_id" id="Fall2013_Items_id" class="form-control" >
                                        <? foreach(Items::Get() as $keywordRs): ?>
                                                <option value="<?=$keywordRs['id']?>"><?=$keywordRs['ItemName']?></option>
                                        <? endforeach; ?>
                                </select>	
                        </div>
                        <? if(isset($errors['Fall2013_Items_id'])): ?><span class = "error"><?=$errors['Fall2013_Items_id'] ?> </span> <? endif;?>
                </div>
                <div class="form-group <?=isset($errors['SuperId']) ? 'has error' : ''   ?>">
                        <label for="SuperId" class="col-sm-2 control-label">Suplier ID</label>
                        <div class="col-sm-10">
                                <input type="SuperId" name="SuperId" id="SuperId" placeholder="SuperId" class="form-control " value="<?=$model['SuperId']?>" />
                        		<? if(isset($errors['SuperId'])): ?><span class = "error"><?=$errors['SuperId'] ?> </span> <? endif;?>
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
                $("#Fall2013_Items_id").val(<?=$model['Fall2013_Items_id']?>);
        })
</script>