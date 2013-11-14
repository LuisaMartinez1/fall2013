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
                
                <div class="form-group <?=isset($errors['Orders_id']) ? 'has error' : ''   ?>">
                        <label for="Orders_id" class="col-sm-2 control-label">Order</label>
                        <div class="col-sm-10">
                               <select name="Orders_id" id="Orders_id" class="form-control" >
                                        <? foreach(Orders::Get() as $keywordRs): ?>
                                                <option value="<?=$keywordRs['id']?>"><?=$keywordRs['PurchaseNumber']?></option>
                                        <? endforeach; ?>
                                </select>		
                        </div>
                        <? if(isset($errors['Orders_id'])): ?><span class = "error"><?=$errors['Orders_id'] ?> </span> <? endif;?>
                </div>
                <div class="form-group <?=isset($errors['Items_id']) ? 'has error' : ''   ?>">
                        <label for="Items_id" class="col-sm-2 control-label">Item</label>
                        <div class="col-sm-10">
                               <select name="Items_id" id="Items_id" class="form-control" >
                                        <? foreach(Items::Get() as $keywordRs): ?>
                                                <option value="<?=$keywordRs['id']?>"><?=$keywordRs['ItemName']?></option>
                                        <? endforeach; ?>
                                </select>			
                        </div>
                        <? if(isset($errors['Items_id'])): ?><span class = "error"><?=$errors['Items_id'] ?> </span> <? endif;?>
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
                $("#Orders_id").val(<?=$model['Orders_id']?>);
                $("#Items_id").val(<?=$model['Items_id']?>);
        })
</script>