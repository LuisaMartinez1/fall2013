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
                
                <div class="form-group">
                        <label for="FistName" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                                <input type="text" name="FirstName" id="FirstName" placeholder="First Name" class="form-control " value="<?=$model['FirstName']?>" />
                        </div>
                </div>
                <div class="form-group">
                        <label for="LastName" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                                <input type="text" name="LastName" id="LastName" placeholder="Last Name" class="form-control " value="<?=$model['LastName']?>" />
                        </div>
                </div>
                <div class="form-group">
                        <label for="Password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                                <input type="password" name="password" id="password" placeholder="password" class="form-control " value="<?=$model['password']?>" />
                        </div>
                </div>
                <div class="form-group">
                        <label for="UserType" class="col-sm-2 control-label">User Type</label>
                        <div class="col-sm-10">
                                <input type="text" name="UserType" id="UserType" placeholder="User Type" class="form-control " value="<?=$model['KeyWord']?>" />
                        </div>
                </div>
                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" value="Save" />
                        </div>
                </div>
        </form>
</div>