<?php
require_once 'definitions.php';
require_once 'delete.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Multiple rows operation</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"/>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#checkAllRows").click(function(){
				if($(this).is(':checked')){
					$('#exampleTable input[type=checkbox]').prop('checked', true);
				}else{
					$('#exampleTable input[type=checkbox]').prop('checked', false);
				}
			}); 
		});
	</script>
</head>
<body>
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-12">
				<h1>Basic example for selecting multiple rows</h1>
			</div>
			<div class="col-md-12">
				<?php if(isset($to_delete_msg)) echo $to_delete_msg; ?>
			</div>
			<div class="col-md-12">
				<form action="#" method="POST">
					<table id="exampleTable" class="table table-bordered">
						<thead>
							<tr>
								<th></th>
								<th>ID</th>
								<th>Name</th>
								<th>Price</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							foreach ($products as $pos => $product) {
								?>
								<tr>
									<td><input type="checkbox" name="to_delete[]" value="<?php echo $product['id']; ?>"></td>
									<td><?php echo $product['id']; ?></td>
									<td><?php echo $product['name']; ?></td>
									<td><?php echo $product['price']; ?></td>
								</tr>
								<?php
							}
							?>			
						</tbody>
					</table>
					<p><input type="checkbox" id="checkAllRows" class="btn btn-info"/> Check all</p>
					<input type="submit" value="Delete rows"/>
				</form>
			</div>
		</div>
	</div>
</body>
</html>