<table>
	<tbody>
		<?php
		$i = 1;
		for($ligne = 1; $ligne <= 4; $ligne++)
		{
			echo "<tr>";
			for($colonne = 1; $colonne <= 7; $colonne++)
			{
				echo "<td>";
				echo "<img class='img_emotion' src='img/emotion/" . $i . ".png'>";
				echo "</td>";
				$i++;	
			}
			echo "</tr>";
		}
		?>
	<tbody>
</table>