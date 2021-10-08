<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<form action="{{url(tafseer.tafseers')}}" method="post" enctype="multipart/form-data">

		@csrf

	<input type="text" name="name" placeholder="Vdo Name">

	<input type="text" name="description" placeholder="Description">

	<input type="file" name="file">

	<input type="submit" >


	</form>

</body>
</html>