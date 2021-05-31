<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>

	<form method="post" enctype="multipart/form-data" action="{{url('files')}}">
      @csrf
		<input type="text" name="title" placeholder="title">
	<!--	<input type="text" name="discription" placeholder="discription">  -->
		<input type="file" name="file">
		<input type="submit" value="Submit">
	</form>

</body>
</html>