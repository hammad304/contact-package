<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
</head>
<body>
<h1>Contact us any time</h1>
<form action="{{route('contact')}}" method="post">
	@csrf
	<input type="text" name="name" placeholder="Your Name Please">
	<input type="email" name="email" placeholder="Your Valid Email">
	<textarea name="message" cols="30" rows="10" placeholder="Your Query"></textarea>
	<input type="submit" value="Submit">
</form>
</body>
</html>