<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mostrar Usuário</title>
</head>
<body>
	<h1>{{ $user->name }}</h1>
	<p>{{ $user->email }}</p>
	<p>{{ $user->created_at }}</p>
</body>
</html>