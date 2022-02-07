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
		const mouse = {
			cor: 'azul'
		}
		mouse.novaconstante = function(){
			console.log('linguagem flexivel');
		}
		console.log(mouse);

		const novoObjeto = Object.assign({},mouse);
		const novoObjeto2 = {...mouse};
		//ambos fazem a mesma coisa;

		const tecladoMecanico = {
			switches: 126,
			keycaps: 126,
			preço: 'caro'
		}

		const mitra = {...tecladoMecanico}
		const kumara = Object.assign({tipo: 'tkl'},tecladoMecanico);
		console.log(kumara);
	</script>
</body>
</html>