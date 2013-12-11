<style type = "text/css">
    .error{color:red;}
</style>
<div class="container">
	<? if(isset($errors) && $errors): ?>
	<ul class="error">
		<? foreach ($errors as $key => $value): ?>
			<li>
				<label><?=$key?>:</label><?=$value?>
			</li>
		<? endforeach; ?>
	</ul>
	<? endif; ?>

<div class="container">	
		<h4 style="color:#A80000" >Please register first in order to make your purchase</h4><br>
        <form action="?action=save" method="post" class="form-horizontal row">
                <input type="hidden" name="id" value="<?=$model['id']?>"/>
                
                <div class="form-group <?=isset($errors['FirstName']) ? 'has error' : '' ?>">
                        <label for="FirstName" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                                <input type="text" name="FirstName" id="FirstName" placeholder="First Name" class="form-control" value="<?=$model['FirstName']?>" />
                                <? if(isset($errors['FirstName'])): ?><span class = "error"><?=$errors['FirstName'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['LastName']) ? 'has error' : '' ?>">
                        <label for="LastName" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                                <input type="text" name="LastName" id="LastName" placeholder="Last Name" class="form-control" value="<?=$model['LastName']?>"/>
                                <? if(isset($errors['LastName'])): ?><span class = "error"><?=$errors['LastName'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['password']) ? 'has error' : '' ?>">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                                <input type="password" name="password" id="password" placeholder="password" class="form-control" value="<?=$model['password']?>"/>
                                <? if(isset($errors['password'])): ?><span class = "error"><?=$errors['password'] ?> </span> <? endif;?>
                        </div>
                </div>
                <div class="form-group <?=isset($errors['KeyWords_id']) ? 'has error' : '' ?>">
                        <label for="KeyWords_id" class="col-sm-2 control-label">User Type</label>
                        <div class="col-sm-10">
                                <select name="KeyWords_id" id="KeyWords_id" class="form-control" >
                                        <? foreach(Keywords::Get() as $keywordRs): ?>
                                                <option value="<?=$keywordRs['id']?>"><?=$keywordRs['Name']?></option>
                                        <? endforeach; ?>
                                </select>
                        </div>
                        <? if(isset($errors['KeyWords_id'])): ?><span class = "error"><?=$errors['KeyWords_id'] ?> </span> <? endif;?>
                </div>
                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" value="Save"/>
                        </div>
                </div>
        </form>
        <br>
        <a href = "?" type="button" class="btn btn-success">Back</a>
        <a href = "?action=payment" type="button" class="btn btn-info">Add Payment Method</a>
        <a href = "?action=address" type="button" class="btn btn-info">Add Shipping Address</a>
</div>
</div>
<script type="text/javascript">
        $(function(){
                $("#KeyWords_id").val(<?=$model['KeyWords_id']?>);
        })
</script>
