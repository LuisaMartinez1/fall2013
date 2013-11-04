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
                
                <div class="form-group <?=isset($errors['ShipmentNumber']) ? 'has error' : ''   ?>">
                        <label for="ShipmentNumber" class="col-sm-2 control-label">Shipment Number</label>
                        <div class="col-sm-10">
                                <input type="text" name="ShipmentNumber" id="FirstName" placeholder="ShipmentNumber" class="form-control " value="<?=$model['ShipmentNumber']?>" />
                        		<? if(isset($errors['ShipmentNumber'])): ?><span class = "error"><?=$errors['ShipmentNumber'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['Purchases_id']) ? 'has error' : ''   ?>">
                        <label for="Purchases_id" class="col-sm-2 control-label">Purchases id</label>
                        <div class="col-sm-10">
                                <input type="text" name="Purchases_id" id="Purchases_id" placeholder="Purchases_id" class="form-control " value="<?=$model['Purchases_id']?>" />
                       			<? if(isset($errors['Purchases_id'])): ?><span class = "error"><?=$errors['Purchases_id'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['Addresses_id']) ? 'has error' : ''   ?>">
                        <label for="Addresses_id" class="col-sm-2 control-label">Addresses id</label>
                        <div class="col-sm-10">
                                <input type="Addresses_id" name="Addresses_id" id="Addresses_id" placeholder="Addresses_id" class="form-control " value="<?=$model['Addresses_id']?>" />
                        		<? if(isset($errors['Addresses_id'])): ?><span class = "error"><?=$errors['Addresses_id'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" value="Save" />
                        </div>
                </div>
        </form>
</div>