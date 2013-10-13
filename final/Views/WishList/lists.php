<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />
<div class="container">
	<h2>Users Wish List</h2>
	
	<table class = "table table-hover  table-striped table-bordered">
		<thead>
		<tr>
			<th>User</th>
			<th>Item</th>
			<th></th>
		</tr>
		</thead>
		<tbody>
		<? foreach ($model as $rs): ?>
			<tr>
				<td><?=$rs['Users_id']?></td>
				<td><?=$rs['Fall2013_Items_id']?></td>
				<td>
					
				</td>
			</tr>	
		<? endforeach?>
		</tbody>
	</table>
</div>
<? function Scripts(){ ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(".table").dataTable();
	</script>
<? } ?>
	
	

