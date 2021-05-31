<!DOCTYPE html>
<html>
<head>
  <title>View</title>

</head>
<body>

<table border="1">
  <tr>
  <th>Sl</th>
  <th>Title</th>
  <th>Download</th>
</tr>
 @foreach($file as $key=>$data)

<tr>
  <td>{{++$key}}</td>
  <td>{{$data->title}}</td>
  <td> <a href="file/download/{{$data->file}}">Download</a> </td>
  
</tr>
 @endforeach

</table>

        

</body>
</html>

