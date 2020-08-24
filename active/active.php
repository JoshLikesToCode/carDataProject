<!DOCTYPE html>
<meta charset="UTF-8">

	<html>
		<head>
			<title>Table with sessions Active Database</title>
			<link rel="stylesheet" type="text/css" href="style.css">
			<script src = "active.js"></script>
			
		</head>
		
		<body>


							<div class="mainHeader">
		<header>
		<br><br><br>
                <h1>CSC 317 SECTION 03 Final Project</h1>
		</header>
		<nav>
		<ul class="main_menu">
			<li><a href="../index.php">/home</a></li>
			<li><a href="active.php">/active</a></li>
			<li><a href="/finalProject/review/review.php">/review</a></li>
			<li><a href="/finalProject/datareview/datareview.php">/datareview</a></li>
			<li><a href="/finalProject/map/map.php">/map</a></li>
		</ul>
		</nav>
		</div>

			<div class = "btn-group">
			<input type = "button" value = "Remove sessionID" onclick = "removeSessionID()"/>
			<input type = "button" value = "Remove username" onclick= "removeUsername()" />
			<input type = "button" value = "Remove date" onclick = "removeDate()"/>
			<input type = "button" value = "Remove width" onclick= "removeWidth()" />
			<input type = "button" value = "Remove active" onclick = "removeActive()"/>
			</div>
			


			<table id = "database_table">
				<tr>
					<th id = "sessionID">sessionID</th>
					<th id = "username">Username</th>
					<th id = "date">Date</th>
					<th id = "width">Width <div class = "tiny">(cm)</div></th>
					<th id = "active">Active</th>

					<?php
					$conn = mysqli_connect("localhost", "root", "root", "cars");
					if ($conn -> connect_error) {
						die("Connection Failed:" . $conn -> connect_error);
					}


					$sql = " SELECT sessionID, username, date, width, active FROM sessions where active = '1'";
					$result = $conn -> query($sql);

					if ($result -> num_rows > 0) {
						while ($row = $result -> fetch_assoc()) {
							echo "<tr><td class = 'sessionIDtd'>" . $row["sessionID"] . "</td><td class = 'usernametd'>" . $row["username"] . "</td><td class = 'datetd'>" . $row["date"] . "</td><td class = 'widthtd'>" . $row["width"] . "</td><td class = 'activetd'>" . $row["active"] . "</td></tr>";
						}
						echo "</table>";
					} else { 
						echo "Empty database";
					}

					$conn -> close();
?>
		
		</body>
	</html>
