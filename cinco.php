<?php

$numero=rand(1,100);
$soma=0;

while ( $soma < 1000) {
	$soma =$soma + $numero;
	echo 'A soma é ' .$soma;
	echo '<br>';
}
?>