<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
<form enctype="multipart/form-data" method="post" name="uploadform" action="{{ url('/test') }}">
	{{ csrf_field() }}
	<label for="photo"></label>
	<input type="file" name="photo" >
	<input type="submit" value="上传文件">
</form>
</body>
</html>