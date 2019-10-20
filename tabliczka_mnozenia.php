
<style>
	div{
		float: left;
		padding: 40px;
	}
</style>

<?php

for ($i=1; $i < 11 ; $i++) { 

	echo '<div>';

	for ($n=0;  $n < 11; $n++) { 

		

		echo $n . '*' . $i . '=' .$i*$n. ';<br/>';


	}

	echo '</div>';
}