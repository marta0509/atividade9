<?php
$numero1 = 2;
$numero2 = 5;
$numero3 = 1; 

if ($numero1>$numero2 && $numero1>$numero3 ) {
	echo 'O numero maior é ' .$numero1;
}
elseif ($numero2>$numero1 && $numero2>$numero3) {
	echo 'O numero maior é ' .$numero2;
}
elseif($numero3>$numero1 && $numero3>$numero2){
	echo 'O numero maior é ' .$numero3;
}

echo '<br>';

if ($numero1<$numero2 && $numero1<$numero3 ) {
	echo 'O numero menor é ' .$numero1;
}
elseif ($numero2<$numero1 && $numero2<$numero3) {
	echo 'O numero menor é ' .$numero2;
}
elseif($numero3<$numero1 && $numero3<$numero2){
	echo 'O numero menor é ' .$numero3;
}

?>