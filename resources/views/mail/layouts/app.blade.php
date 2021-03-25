<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
	<style>
		* {
			margin: 0;
			padding: 0;
			background-color: #FFF3E2;
		}
		h3{
			margin: 0;
		}
		p{
			margin: 0;
		}
		h1, h2, h3, h4, h5, h6{
			font-family: "Arial";
			color: #333333;
		}
		.description{
			font-family: "Trebuchet MS";
			font-size: 18px;
			color: #666666;
		}
	</style>
</head>
<body>
	<table align="center" width="100%">
		<tr>
			<td></td>
		</tr>
		<tr>
			<td>@yield('content')</td>
		</tr>
		<tr>
			<td></td>
		</tr>
	</table>
</body>
</html>