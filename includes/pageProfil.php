<article class="page-content">
	<!-- Humeur -->
	<p>Mon humeur : 
	<?php
		$id = $_SESSION['iduser']; // Requis pour l'exec de calculScore
		include 'score/calculScore.php';
	?>
	</p>
	
	<!-- Conseil -->
	<?php
	
	$ilyadesconseils = true;
	
	if($ilyadesconseils)
	{
		echo "<div class='conseil'>";
			echo "<fieldset>";
				echo "<legend>Titre</legend>";
				echo "<p>Blablablablabla et blabla</p>";
			echo "</fieldset>";
		echo "</div>";
	}
	else
	{
		echo "<p>Comment allez vous ?</p>";
	}
	
	?>
	
</article>