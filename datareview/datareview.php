<!DOCTYPE html>
<meta charset="UTF-8">

	<html>
		<head>
			<title>Table with cars Database</title>
			<link rel="stylesheet" type="text/css" href="style.css">
			<script src = "datareview.js"></script>
			
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
			<li><a href="/finalProject/active/active.php">/active</a></li>
			<li><a href="/finalProject/review/review.php">/review</a></li>
			<li><a href="datareview.php">/datareview</a></li>
			<li><a href="/finalProject/map/map.php">/map</a></li>
		</ul>
		</nav>
		</div>

			<div class = "btn-group">
			<input type = "button" value = "Remove uniqueID" onclick = "removeUniqueID()">
			<input type = "button" value = "Remove sessionID" onclick = "removeSessionID()">
			<input type = "button" value = "Remove name" onclick= "removeName()" />
			<input type = "button" value = "Remove width" onclick= "removeWidth()" />
			<input type = "button" value = "Remove left" onclick= "removeLeft()" />
			<input type = "button" value = "Remove right" onclick= "removeRight()" />
			<input type = "button" value = "Remove l1" onclick= "removeL1()" />
			<input type = "button" value = "Remove l2" onclick= "removeL2()" />
			<input type = "button" value = "Remove l3" onclick= "removeL3()" />
			<input type = "button" value = "Remove dist" onclick= "removeDist()" />
			<input type = "button" value = "Remove ir" onclick= "removeIr()" />
			<input type = "button" value = "Remove time" onclick= "removeTime()" />
			</div>
			


			<table id = "database_table">
				<tr>
					<th id = "uniqueID">uniqueID</th>
					<th id = "sessionID">sessionID</th>
					<th id = "name">name</th>
					<th id = "width">width <div class = "tiny">(cm)</div></th>
					<th id = "left">left <div class = "tiny">(cm)</div></th>
					<th id = "right">right <div class = "tiny">(cm)<div></th>
					<th id = "l1">l1</th>
					<th id = "l2">l2</th>
					<th id = "l3">l3</th>
					<th id = "dist">dist <div class = "tiny">(cm)</div></th>
					<th id = "ir">ir</th>
					<th id = "time">time <div class = "tiny">(ms)</div></th>


					<?php
					$conn = mysqli_connect("localhost", "root", "root", "cars");
					if ($conn -> connect_error) {
						die("Connection Failed:" . $conn -> connect_error);
					}

					$sql = " SELECT uniqueID, sessionID, name, width, left1, right1, l1, l2, l3, dist, ir, time FROM cars";
					$result = $conn -> query($sql);

					if ($result -> num_rows > 0) {
						while ($row = $result -> fetch_assoc()) {
							echo "<tr><td class ='uniqueIDtd'>" . $row["uniqueID"] . "</td><td class = 'sessionIDtd'>" . $row["sessionID"] . "</td><td class = 'nametd'>" . $row["name"] . "</td><td class = 'widthtd'>" . $row["width"] . "</td><td class = 'lefttd'>" . $row["left1"] . "</td><td class = 'righttd'>" . $row["right1"] . "</td><td class = 'l1td'>" . $row["l1"] . "</td><td class = 'l2td'>" . $row["l2"] . "</td><td class = 'l3td'>" . $row["l3"] . "</td><td class = 'disttd'>" . $row["dist"] . "</td><td class = 'irtd'>" . $row["ir"] . "</td><td class = 'timetd'>" . $row["time"] . "</td></tr>";
						}
						echo "</table>";
					} else { 
						echo "Empty database";
					}

					$conn -> close();
?>
		
		</body>
	</html>
