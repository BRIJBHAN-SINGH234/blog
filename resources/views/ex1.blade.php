<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="upload" method="POST"  enctype="multipart/form-data">
		@csrf
		<input type="file" name="file[]" multiple >
		<input type="submit" name="submit" value="submit">
	</form>
	<table>
		<tr>
			<td>hii</td>
			<td>dfsdf</td>
			<td>sdfsd</td>
			<td>sdfsd</td>
		</tr>
	</table>
</body>
</html>