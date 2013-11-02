<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />
<div class="container">
	<h2>Phone Numbers</h2>
	
	<a href="?action=new">Add Phone Numbers</a>
	
	<table class = "table table-hover  table-striped table-bordered">
		<thead>
		<tr>
			<th>User</th>
			<th>Phone Type</th>
			<th>Phone Number</th>
			<th></th>
		</tr>
		</thead>
		<tbody>
		<? foreach ($model as $rs): ?>
			<tr>
				<td><?=$rs['Users_id']?></td>
				<td><?=$rs['PhoneTypes_id']?></td>
				<td><?=$rs['value']?></td>
				<td>
					<a class="glyphicon glyphicon-file" href="?action=details&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal"></a>
                    <a class="glyphicon glyphicon-pencil" href="?action=edit&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal"></a>
                    <a class="glyphicon glyphicon-trash" href="?action=delete&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal"></a>				</td>
			</tr>	
		<? endforeach?>
		</tbody>
	</table>
</div>
<div id ="myModal" class="modal fade"></div>

<? function Scripts(){ ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(".table").dataTable();
	</script>
<? } ?>
	
	

