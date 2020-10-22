<?php 
$nota1 = 15;
$nota2 = 17;
$nota3 =12;

$soma = $nota1 + $nota2 + $nota3;
$media = $soma / 3;

	if ($media<=8 ) {
		echo 'O aluno está reprovado.';
	}
	elseif ($media<8 && $media<=9.5) {
		echo 'O aluno irá a recuparação.';
	}
	else{
		echo 'O aluno está aprovado.';
	}

?>