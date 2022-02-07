<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<script>
		const numeros = [1,2,3];
		console.log(numeros);
		numeros.unshift(0); //adiciona valor no começo
		numeros.splice(1,0,'a'); //adiciona valor no indice (e troca a quantidade em numeros, no caso nenhum pois é 0)
		console.log(numeros);
		numeros.push(4); //adiciona um numero no final
		console.log(numeros);
		numeros.pop();
		console.log(numeros); //remove o último número
		
		console.log(numeros.indexOf(1)); //escreve o índice do primeiro registro do valor inserido
		console.log(numeros.lastIndexOf(3)); //escreve o índice do último registro do valor inserido
		console.log(numeros.includes(2)); //escreve se tem o número digitado
	</script>

	<script>
		const numeross = [{n: 1},{n: 2},{n: 3}]; //array
		const marca = numeross.find(numero => numero.n === 2); //find procura os numeros, onde numero é uma constante criada que instancia as constantes do array e permite a busca (sim, é confuso)
		console.log(marca);
	</script>
</body>
</html>