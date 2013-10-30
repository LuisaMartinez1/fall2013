<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />
<div class="container">
	<h2>Email Addresses</h2>
	
	<table class = "table table-hover  table-striped table-bordered">
		<thead>
		<tr>
			<th>User</th>
			<th>Email</th>
			<th>Type</th>
			<th></th>
		</tr>
		</thead>
		<tbody>
		<? foreach ($model as $rs): ?>
			<tr>
				<td><?=$rs['Users_id']?></td>
				<td><?=$rs['Email']?></td>
				<td><?=$rs['EmailTypes_id']?></td>
				<td>
					<a class="glyphicon glyphicon-file" href="?action=details&id=<?=$rs['id']?>" data-toggle ="modal" data-target="#myModal"></a>
                    <a class="glyphicon glyphicon-pencil" href="?action=edit&id=<?=$rs['id']?>"></a>
                   	<a class="glyphicon glyphicon-trash" href="?action=delete&id=<?=$rs['id']?>"></a>			
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
	
	

