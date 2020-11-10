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
	      <div class="container">
                @if(count($errors)>0)
  <ul>
      @foreach($errors->all() as $error)
      <li class="alert alert-danger">{{$error}}</li>
      @endforeach
  </ul>

 @endif


@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>

   @endif


	<div class="main">
		<form method="post" action="/createuser">
			<label>Full name</label>
			<input type="text" name="fullname" class="form-control" required>
			<label>email:</label>
			<input type="email" name="email" class="form-control" required>
			<label>Password</label>
			<input type="password" name="password" class="form-control" required>
				@csrf

			<input type="submit" name="" value="CREAT" class="btn btn-success">	
		</form>

		<div>
			<table class="table table-dark">
				<tr>
					<th>Fullname</th>
					<th>Email</th>
					<th>Password</th>
				</tr>
				@foreach($user as $data)
					<tr>
						<td>{{$data->name}}</td>
						<td>{{$data->email}}</td>
						<td>{{$data->login2->password}}</td>
					</tr>
				@endforeach
			</table>


		</div>
		
	</div>
</body>
</html>