
<div class="container">
 <form action="?action=order&id=<?$name['id']?>" method="post" class="form-horizontal row">
	<div class="form-group <?=isset($errors['Users_id']) ? 'has error' : ''   ?>">
                        <label for="Users_id" class="col-sm-2 control-label">Pick Your Name</label>
                        <div class="col-sm-10">
                                <select name="Users_id" id="Users_id" class="form-control" >
                                        <? foreach(Users::Get() as $keywordRs): ?>
                                                <option value="<?=$keywordRs['id']?>"><?=$keywordRs['LastName']?></option>
                                        <? endforeach; ?>
                                </select>
                        		
                        </div>
                        <? if(isset($errors['Users_id'])): ?><span class = "error"><?=$errors['Users_id'] ?> </span> <? endif;?>
     </div>
      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" value="Next" />
                        </div>
      </div>

  </form>
</div>