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
		function valor(param1, param2, param3){
			this.param1 = param1,
			this.param2 = param2,
			this.param3 = param3
		}

		let array = [
			new valor(1,2,3),
			new valor(1,2,3),
			new valor(1,2,3),
		];

		console.log(array);
		console.log(array);
		console.log(array);
	</script>
</body>
</html>