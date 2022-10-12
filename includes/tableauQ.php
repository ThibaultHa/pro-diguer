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
				echo "<input type='checkbox' id='emotion_" . $i . "' name='emotions[]' value='" . $i . "'> <img class='img_emotion' src='img/emotion/" . $i . ".png'>";
				echo "</td>";
				$i++;	
			}
			echo "</tr>";
		}
		?>
	<tbody>
</table>