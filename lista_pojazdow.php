<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="kokos.css">




<title>Plutex::Lista pojazdów</title>
</head>

<body>
<div class="container">
<div class="bar"><h1>Lista pojazdów</h1></div>

<table>
<tr>
<th>Marka</th>
<th>Model</th>
<th>Dostępność</th>
</tr>
<?php>
$conn = mysqli_connect("localhost" , "root", "", "kokos");
$sql = "SELECT Marka, Model, Dostępność from cars"
$result = $conn->query($sql);
if ($result-> num_rows > 0) {
	while ($row = $result-> fetch_assoc()) {
		echo "<tr><td>". $row["id"]."</td><td>". $row ["Marka"] . "</td><td>" . $row ["Model"] . "</td><td>" . $row ["Dostępność"] . "</td></tr>";
	}
		echo "</table";
  } 
  else 
  {
  echo "0 result";
  }
  $conn -> close();
  ?>
		</table>

</div>
</body>

</html> 
