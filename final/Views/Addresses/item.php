			<tr class="<?= $rs['id']==$_REQUEST['id'] ? 'success' : '' ?>  ">
				<td><?=$rs['User']?></td>
				<td><?=$rs['AddressTypes']?></td>
				<td><?=$rs['Street']?></td>
				<td><?=$rs['City']?></td>
				<td><?=$rs['State']?></td>
				<td><?=$rs['Country']?></td>
				<td><?=$rs['ZipCode']?></td>
				<td>
					<a class="glyphicon glyphicon-file" href="?action=details&id=<?=$rs['id']?>"></a>
                    <a class="glyphicon glyphicon-pencil" href="?action=edit&id=<?=$rs['id']?>"></a>
                    <a class="glyphicon glyphicon-trash" href="?action=delete&id=<?=$rs['id']?>"></a>
				</td>
			</tr>	