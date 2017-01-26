<!DOCTYPE html>
<html>
<head>
	<title>All Dojos</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="/assets/js/app.js"></script>
</head>
<body>
	<button id="showAll">Show me all your dojos</button>

	<div id="dojos"></div>

	<form id="addForm" action="/dojos/add" method="post">
		<p>
			<label>Name: </label>
			<input type="text" name="name">
		</p>
		<p>
			<label>Adress: </label>
			<input type="text" name="address">
		</p>
		<input type="submit">
	</form>
</body>
</html>