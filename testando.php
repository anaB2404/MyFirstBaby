
<?php
if(isset($_POST["vai"])){
	$data = $_POST["bebezin"];
	list($dia, $mes, $ano) = explode('/', $data);
	$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
	$nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
	$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
	if($idade>4){
		echo "saporra não é bebê não mano!";
	}else{
		echo "Fala Bebê";
	}
}
?>