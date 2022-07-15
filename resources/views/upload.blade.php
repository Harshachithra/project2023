<html>
<head>
<link rel="stylesheet" type="text/css" href="{{URL::asset('formcss.css')}}" media="all">
<link rel="stylesheet" type="text/css" href="{{URL::asset('mycss.css')}}" media="all">
</head>

<body>
<div class="header">
<H1>upload file</H1>
</div>

<div class="s1">
<form action="/save1" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}
<input type="file" name="image"><br><br>
<input type="text" name="s2" placeholder="Name"><br><br>
<button type="submit">Upload File</button>
</form> 
</div>
</body>
</html>  