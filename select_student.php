<?php
 require 'global.php';
				while ($row = mysqli_fetch_array ($res)) {
					echo "<tr>";
					echo "<td>" .$row['id']."</td>";
					echo "<td>" .$row['username']."</td>";
					echo "</tr>";
				}

				?>