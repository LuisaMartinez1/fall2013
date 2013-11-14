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
                
                <div class="form-group <?=isset($errors['Fall2013_Users_id']) ? 'has error' : ''   ?>">
                        <label for="Fall2013_Users_id" class="col-sm-2 control-label">User</label>
                        <div class="col-sm-10">
                        	<select name="Fall2013_Users_id" id="Fall2013_Users_id" class="form-control" >
                                        <? foreach(Users::Get() as $keywordRs): ?>
                                                <option value="<?=$keywordRs['id']?>"><?=$keywordRs['LastName']?></option>
                                        <? endforeach; ?>
                            </select>        		
                        </div>
                        <? if(isset($errors['Fall2013_Users_id'])): ?><span class = "error"><?=$errors['Fall2013_Users_id'] ?> </span> <? endif;?>
                </div>
                <div class="form-group <?=isset($errors['CreditCardNumber']) ? 'has error' : ''   ?>">
                        <label for="CreditCardNumber" class="col-sm-2 control-label">Card Number</label>
                        <div class="col-sm-10">
                                <input type="text" name="CreditCardNumber" id="CreditCardNumber" placeholder="CreditCardNumber" class="form-control " value="<?=$model['CreditCardNumber']?>" />
                       			<? if(isset($errors['CreditCardNumber'])): ?><span class = "error"><?=$errors['CreditCardNumber'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['CreditCardHolderName']) ? 'has error' : ''   ?>">
                        <label for="CreditCardHolderName" class="col-sm-2 control-label">Holder's Name</label>
                        <div class="col-sm-10">
                                <input type="CreditCardHolderName" name="CreditCardHolderName" id="CreditCardHolderName" placeholder="CreditCardHolderName" class="form-control " value="<?=$model['CreditCardHolderName']?>" />
                        		<? if(isset($errors['CreditCardHolderName'])): ?><span class = "error"><?=$errors['CreditCardHolderName'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['CreditExpirationDate']) ? 'has error' : ''   ?>">
                        <label for="CreditExpirationDate" class="col-sm-2 control-label">Expiration Date</label>
                        <div class="col-sm-10">
                                <input type="text" name="CreditExpirationDate" id="CreditExpirationDate" placeholder="CreditExpirationDate" class="form-control " value="<?=$model['CreditExpirationDate']?>" />
                        		<? if(isset($errors['CreditExpirationDate'])): ?><span class = "error"><?=$errors['CreditExpirationDate'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['Method']) ? 'has error' : ''   ?>">
                        <label for="Method" class="col-sm-2 control-label">Method</label>
                        <div class="col-sm-10">
                                <input type="text" name="Method" id="Method" placeholder="Method" class="form-control " value="<?=$model['Method']?>" />
                        		<? if(isset($errors['Method'])): ?><span class = "error"><?=$errors['Method'] ?> </span> <? endif;?>
                        </div>
                </div>
                  <div class="form-group <?=isset($errors['CreditSecurityCode']) ? 'has error' : ''   ?>">
                        <label for="CreditSecurityCode" class="col-sm-2 control-label">Security Code</label>
                        <div class="col-sm-10">
                                <input type="text" name="CreditSecurityCode" id="CreditSecurityCode" placeholder="CreditSecurityCode" class="form-control " value="<?=$model['CreditSecurityCode']?>" />
                        		<? if(isset($errors['CreditSecurityCode'])): ?><span class = "error"><?=$errors['CreditSecurityCode'] ?> </span> <? endif;?>
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
                $("#Fall2013_Users_id").val(<?=$model['Fall2013_Users_id']?>);
        })
</script>
