<!DOCTYPE html>
<html>
<head>
	<title>Detailes</title>
</head>
<body>

	<h2>{{$data->title}}</h2>
	<p>
		<iframe src="{{url('public/storage/'.$data->file)}}" style="width: 1000px; height: 1000px"></iframe>
	</p>
</body>
</html>