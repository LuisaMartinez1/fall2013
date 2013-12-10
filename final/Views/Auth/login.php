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
        <form action="?action=submitlogin" method="post" class="form-horizontal row">
             
                
                
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
              
                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" value="Login"/>
                        </div>
                </div>
        </form>
</div>
<script type="text/javascript">
        $(function(){
                $("#KeyWords_id").val(<?=$model['KeyWords_id']?>);
        })
</script>
