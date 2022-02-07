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
		const val = [1,2,3,4,5];
		const value = val.join('.');
		console.log(value);

		const result = value.split('.');
		console.log(result);

		console.log(result.join('/'));

		const url = prompt('Digite a url');
		const urlsplit = url.split('/');
		console.log(urlsplit);
	</script>
</body>
</html>

