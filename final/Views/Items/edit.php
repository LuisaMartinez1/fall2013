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
        <? endif; ?>
		<form action="?action=save" method="post" class="form-horizontal row">
                <input type="hidden" name = "id" value = "<?=$model['id']?>" /> 
               
			 <div class="form-group <?=isset($errors['ItemName']) ? 'has error' : '' ?>">
				<label for="ItemName" class="col-sm-2 control-label">Item Name</label>
				<div class="col-sm-10">
					<input type="text" name="ItemName" id="ItemName" placeholder="ItemName" class="form-control " value="<?=$model['ItemName']?>" />
				                <? if(isset($errors['ItemName'])): ?><span class = "error"><?=$errors['ItemName'] ?> </span> <? endif;?>
				</div>
			</div> 
			    
			<div class="form-group <?=isset($errors['ItemPrice']) ? 'has error' : '' ?>">
				<label for="ItemPrice" class="col-sm-2 control-label">Item Price</label>
				<div class="col-sm-10">
					<input type="text" name="ItemPrice" id="ItemPrice" placeholder="ItemPrice" class="form-control " value="<?=$model['ItemPrice']?>" />
				                        <? if(isset($errors['ItemPrice'])): ?><span class = "error"><?=$errors['ItemPrice'] ?> </span> <? endif;?>
				</div>
			</div>  
			
			<div class="form-group <?=isset($errors['Categories_id']) ? 'has error' : '' ?>">
				<label for="Categories_id" class="col-sm-2 control-label">Category</label>
				<div class="col-sm-10">
								<select name="Categories_id" id="Categories_id" class="form-control" >
                                        <? foreach(Categories::Get() as $keywordRs): ?>
                                                <option value="<?=$keywordRs['id']?>"><?=$keywordRs['CategoryName']?></option>
                                        <? endforeach; ?>
                                </select>            
				</div>
				 <? if(isset($errors['Categories_id'])): ?><span class = "error"><?=$errors['Categories_id'] ?> </span> <? endif;?>
			</div>
			
			<div class="form-group <?=isset($errors['ItemNumber']) ? 'has error' : '' ?>">
				<label for="ItemNumber" class="col-sm-2 control-label">Item Number</label>
				<div class="col-sm-10">
					<input type="text" name="ItemNumber" id="ItemNumber" placeholder="ItemNumber" class="form-control " value="<?=$model['ItemNumber']?>" />
				                <? if(isset($errors['ItemNumber'])): ?><span class = "error"><?=$errors['ItemNumber'] ?> </span> <? endif;?>
				</div>
			</div>
			<div class="form-group <?=isset($errors['Inventories_id']) ? 'has error' : '' ?>">
				<label for="Inventories_id" class="col-sm-2 control-label">Quantaty</label>
				<div class="col-sm-10">
								<select name="Inventories_id" id="Inventories_id" class="form-control" >
                                        <? foreach(Inventory::Get() as $keywordRs): ?>
                                                <option value="<?=$keywordRs['id']?>"><?=$keywordRs['Quantaty']?></option>
                                        <? endforeach; ?>
                                </select>
				               
				</div>
				 <? if(isset($errors['Inventories_id'])): ?><span class = "error"><?=$errors['Inventories_id'] ?> </span> <? endif;?>
			</div>
			<div class="form-group <?=isset($errors['ProductKeyWords_id']) ? 'has error' : '' ?>">
				<label for="roductKeyWords_id" class="col-sm-2 control-label">KeyWord</label>
				<div class="col-sm-10">
					<select name="ProductKeyWords_id" id="ProductKeyWords_id" class="form-control" >
                                        <? foreach(ProductKeyWords::Get() as $keywordRs): ?>
                                                <option value="<?=$keywordRs['id']?>"><?=$keywordRs['Name']?></option>
                                        <? endforeach; ?>
                                </select>      
				                
				</div>
				<? if(isset($errors['ProductKeyWords_id'])): ?><span class = "error"><?=$errors['ProductKeyWords_id'] ?> </span> <? endif;?>
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
                $("#Categories_id").val(<?=$model['Categories_id']?>);
                $("#Inventories_id").val(<?=$model['Inventories_id']?>);
                $("#ProductKeyWords_id").val(<?=$model['ProductKeyWords_id']?>);
                
        })
</script>
