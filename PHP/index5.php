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
		const postagem = {
			titulo: 'amoviver',
			mensagem: 'viver eh fueda',
			autor: 'eumesmo',
			visualizacoes: 'o cara do curso e analbafeto',
			comentarios(){
				('eumesmo', 'soumuitoincrivel')
			},
			comentario : [
				{autor: 'eumesmo', comentario: 'ela e sensacional'},
				{autor: 'eumesmo', comentario: 'ela e sensacional'}
			],
			estaAoVivo: 'ta morto'
		}

		for(let val in postagem){
			console.log(val, postagem[val]);
		}
	</script>
</body>
</html>