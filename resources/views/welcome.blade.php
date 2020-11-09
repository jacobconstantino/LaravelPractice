<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="/css/main.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="main">
<div>
		<form method="post" action="/todolist">
			@csrf
			<label>Activity</label>
			<input type="text" class="form-control" name="activity">

			<input type="submit" name="" value="submit" class="btn btn-success">
		</div>

		

			@yield('content')
		</form>
	</div>
</body>
</html>