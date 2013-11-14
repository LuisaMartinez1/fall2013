<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />
<style>
   .table tr.success2, .table tr.success2 td{
		background-color: #FFAA00 !important;
}
</style>
<div class="container">
	<h2>Addresses</h2>
	
	 <? if(isset($_REQUEST['status']) && $_REQUEST['status'] == 'Saved'): ?>
		<div class="alert alert-success">
			<button type="button" class="close" aria-hidden="true">&times;</button>
			<b>Success!</b> Your Address has been saved.
		 </div>
	<? endif; ?>
	<a href="?action=new">Add Address</a>
	<table class = "table table-hover  table-striped table-bordered">
		<thead>
		<tr>
			<th>User</th>
			<th>Address Type</th>
			<th>Street</th>
			<th>City</th>
			<th>State</th>
			<th>Country</th>
			<th>Zip Code</th>
			<th></th>
		</tr>
		</thead>
		<tbody>
		<? foreach ($model as $rs): ?>
			<tr class="<?= $rs['id']==$_REQUEST['id'] ? 'success' : '' ?>  ">
				<td><?=$rs['Users_id']?></td>
				<td><?=$rs['AddressTypes_id']?></td>
				<td><?=$rs['Street']?></td>
				<td><?=$rs['City']?></td>
				<td><?=$rs['State']?></td>
				<td><?=$rs['Country']?></td>
				<td><?=$rs['ZipCode']?></td>
				<td>
					<a class="glyphicon glyphicon-file" href="?action=details&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal"></a>
                    <a class="glyphicon glyphicon-pencil" href="?action=edit&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal"></a>
                    <a class="glyphicon glyphicon-trash" href="?action=delete&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal"></a>
				</td>
			</tr>	
		<? endforeach?>
		</tbody>
	</table>
</div>
<div id ="myModal" class="modal fade"></div>
<? function Scripts(){ ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$(".table").dataTable();
			 $(".alert .close").click(function(){
			 		$(this).closest(".alert").slideUp();
			 	 });
			 	 
			 	 $(".table tr ").click(function(){
			 	 	$(this).toggleClass("success2")
			 	 });
			 	 
		})
	</script>
<? } ?>
	
	

