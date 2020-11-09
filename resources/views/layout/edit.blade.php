<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<form method="post" action="/editactivity">
	@csrf
	<label> Activity</label>
	<input type="hidden" value="{{$edit->todo_id}}" name="todo_id">
	<input type="text" name="activity" value="{{$edit->activity}}">

	<input type="submit" name="" value="EDI WOW">
	</form>



</body>
</html>