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
		const endereco = {
			rua: 'ruafoda',
			cidade: 'cidadefoda',
			cep: 123456
		}

		function exibirEndereco(endereco){
			for(let dados in endereco){
				console.log(dados, endereco[dados]);
			}
		}

		exibirEndereco(endereco);
	</script>
</body>
</html>