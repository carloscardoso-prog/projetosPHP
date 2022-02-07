<!DOCTYPE html>
<html>
	<title>JS</title>
</head>
<body>
	<script>
		const nome = {
			nome: 'um',
			nome: 'dois',
			nome: 'tres'
		}
		propriedades(nome);
		function propriedades(object){
			for(escrito in object)
				if (typeof escrito === 'string'){
					console.log(escrito, object[escrito])
				}
		}

	</script>
</body>
</html>