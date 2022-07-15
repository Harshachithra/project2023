<html>
<head>
<title> harsha</title>
<link rel="stylesheet" type="text/css" href="{{URL::asset('tablecss.css')}}" media="all">
<img src="{{URL::asset('images/cat.jpg')}}">

</head>
<body>
<body bgcolor="#4c4b54">      
<h1>View Images</h1>
<div class=s1>   
       
<table id="fs" align="center">


<tr>
@foreach($data as $value)
<td>{{$value->photo}}</td>

</tr>

@endforeach

</table>
</div>


   
</body>
</html>