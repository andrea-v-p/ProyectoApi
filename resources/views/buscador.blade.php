<!DOCTYPE html>
<html>
<head>
	<title>Busacador</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-10">
				<form method="POST" name="buscar" class="form-inline" action="/result">
					{{ csrf_field() }}
					<div class="form-group">
						<input type="text" class="form-control" id="buscador" name="buscador" placeholder="Busacador">
					</div>
					<button type="submit" class="btn btn-dark">Buscar</button>
				</form>
			</div>
		</div>
		<div class="row">
			
		</div>
	</div>
</body>
</html>