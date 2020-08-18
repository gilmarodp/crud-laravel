<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edição de Usuário</title>
</head>
<body>

	<form action="{{ route('user.update', ['user' => $user->id]) }}" method="post">
		@csrf
		@method('PUT')
		<label>Nome:</label>
		<input type="text" name="name" value="{{ $user->name }}">

		<label>E-mail:</label>
		<input type="text" name="email" value="{{ $user->email }}">

		<label>Senha:</label>
		<input type="password" name="password">

		<input type="submit" value="Editar Usuário">
	</form>

</body>
</html>