<article class="page-content">
	<p>Mon humeur : 
	<?php
		$id = $_SESSION['iduser']; // Requis pour l'exec de calculScore
		include 'score/calculScore.php';
	?>
	
	</p>
</article>