<!DOCTYPE html>
<html>
	<head>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	</head>
	<body>

@foreach ($books as $book)
 {{$book->title}}
 <ol>
     <li> {{$book->author->first_name}}  {{$book->author->last_name}} </li>
     <li> {{$book->publisher->name}}</li>
	 </ol>
@endforeach
	</body>
</html>
