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
		let numeros = [1,2,3,4,5,6,7,8,9,0];
		let outros = numeros;

		numeros.length = 0;
		console.log(numeros);

		numeros = [1,2,3,4,5,6,7,8,9,0];

		numeros.splice(0,numeros.length); //adiciona nada, remove a quantidade de numeros no mesmo tamanho do array
		console.log(numeros);
	
		const matriz = [1,2,3];
		const matriz2 = [4,5,6];

		// const matrizfinal = matriz.concat(matriz2);
		const matrizfinal = [...matriz,...matriz2];
		console.log(matrizfinal);

		const matrizfueda = matriz.slice(1,2); //copia a matriz do indice indicado até o último indicado menos um
		const matrizfuedas = matriz.slice(1); //copia a matriz do indice indicado até o final.


		//-----------------//
		const letras = ['a','b','c'];
		const letras1 = ['d','e','f'];
		const alfabeto = letras.concat(letras1);
	
		const corta = alfabeto.slice(1);

		//-----------------//
		const value = [1,2,3];
		const value2 = ['#', ...value];
		console.log(value2);

		for(num of numeros){
			console.log(num);
		}

		// numeros.forEach(function(numeral)){
		// 	console.log(numeral);
		// }

		numeros.forEach((numeral,index) => console.log(numeral,index));
		
	</script>
</body>
</html>