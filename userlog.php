
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset = "UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Log</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>
		table tr:hover{
			cursor:pointer;
		}
		table thead {
			background: #008ECC;
		}
		table thead tr th {
			color: #fff;
		}
	</style>

	<script>
		$(document).ready(function(){
			$('table tr').click(function(){
				var id = $(this).attr('row_id');
				window.open("https://localhost:8080/web_development/php_programs/employee_registration_update_new.php?id=" + id);
			});
		});
		
	</script>
</head>
<body>
	<div class="container">
		<h2 style="margin-top:30px; margin-bottom: 20px;">User List</h2>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Username</th>
					<th>Email</th>
					<th> Password</th>		
				</tr>
			</thead>
		<tbody>
	<?php
		include 'db.php';
		

		$sql = "SELECT id, username, email, password FROM users";
	$result = $conn->query($sql);
			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()) {
					echo "<tr row_id='" . $row['id'] . "'><td>" . $row["username"] . "</td></td>" . "<td>". $row["email"]. "<td> " . $row["password"]. "</td>";

						}
							echo "</table>";
						}
						else{
							echo "0 results"; }
							$conn->close();
						?>
					</tbody>			
		</table>
	</div>
</body>
</html>