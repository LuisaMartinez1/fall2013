<? include 'inc/_global.php'; ?>
<?
	
	$conn = GetConnection();
	$result = $conn->query('SELECT * FROM Fall2013_KeyWords');
	$rs = $result->fetch_assoc();	
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <h1>This the final</h1>
    
    <? 
    	$msg = 'Hello World ' ;
		$name = "Luisa";
		include 'sometthing.php';
    ?>
    <pre>
    	<? print_r($rs);  ?>
    </pre>
    <spam class= "label label-success"> <? echo $msg . $name ?></spam>
 	<script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"></script>
  </body>
</html>