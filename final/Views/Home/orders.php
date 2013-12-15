<?$user=Auth::GetUser();?>

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
        <form action="?action=saveorder" method="post" class="form-horizontal row">                   
				<input type="hidden" name="Users_id" value="<?=$user['id']?>" />                   
				<div class="form-group ">
                        <label for="Users_id" class="col-sm-2 control-label">User</label>
                        <div class="col-sm-10">
                                <input type="text" name="UserName" id="UserName" placeholder="UserName" class="form-control " value="<?=$user['LastName'] ?>"  readonly/>
                        		 <? if(isset($errors['Users_id'])): ?><span class = "error"><?=$errors['Users_id'] ?> </span> <? endif;?>
                        </div>
                      
                </div>
                               
                <div class="form-group <?=isset($errors['PurchaseNumber']) ? 'has error' : ''   ?>">
                        <label for="PurchaseNumber" class="col-sm-2 control-label">Order Number</label>
                        <div class="col-sm-10">
                                <input type="text" name="PurchaseNumber" id="PurchaseNumber" placeholder="PurchaseNumber" class="form-control " value="<?=rand(1,100000)?>"  readonly/>
                        		<? if(isset($errors['PurchaseNumber'])): ?><span class = "error"><?=$errors['PurchaseNumber'] ?> </span> <? endif;?>
                        </div>
                </div>
                
                <div class="form-group <?=isset($errors['PurchasedTotal']) ? 'has error' : ''   ?>">
                        <label for="PurchasedTotal" class="col-sm-2 control-label">Total</label>
                        <div class="col-sm-10">
                                <input type="text" name="PurchasedTotal" id="PurchasedTotal" placeholder="PurchasedTotal" class="form-control " value=" " />
                       			<? if(isset($errors['PurchasedTotal'])): ?><span class = "error"><?=$errors['PurchasedTotal'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['PurchaseDate']) ? 'has error' : ''   ?>">
                        <label for="PurchaseDate" class="col-sm-2 control-label">Order Date</label>
                        <div class="col-sm-10">
                                <input type="PurchaseDate" name="PurchaseDate" id="PurchaseDate" placeholder="PurchaseDate" class="form-control " value="<?=@date("Y/m/d")?>" readonly/>
                        		<? if(isset($errors['PurchaseDate'])): ?><span class = "error"><?=$errors['PurchaseDate'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['Fall2013_PaymentCreditCardTypes_id']) ? 'has error' : ''   ?>">
                        <label for="Fall2013_PaymentCreditCardTypes_id" class="col-sm-2 control-label">Payment Method</label>
                        <div class="col-sm-10">
                                <select name="Fall2013_PaymentCreditCardTypes_id" id="Fall2013_PaymentCreditCardTypes_id" class="form-control" >
                                        <? foreach(CreditCard::GetPayment($user['id']) as $keywordRs): ?>
                                                <option value="<?=$keywordRs['id']?>" >"XXXX-XXXX-XXXX-<?=substr($keywordRs['CreditCardNumber'],-4);?></option>
                                                
                                        <? endforeach; ?>
                                </select>
                        		
                        </div>
                        <? if(isset($errors['Fall2013_PaymentCreditCardTypes_id'])): ?><span class = "error"><?=$errors['Fall2013_PaymentCreditCardTypes_id'] ?> </span> <? endif;?>
                </div>
                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" href="?action=complete&id=<?=$_REQUEST['id']?> " value="Save" />
                        </div>
                </div>
        </form>
        <a href = "?" type="button" class="btn btn-danger">Cancel</a>
</div>
<script type="text/javascript">
        $(function(){
               
                $("#Fall2013_PaymentCreditCardTypes_id").val(<?=$model['Fall2013_PaymentCreditCardTypes_id']?>);
        })
</script>



 