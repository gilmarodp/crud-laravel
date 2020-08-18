<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Criação de Usuário</title>
</head>
<body>

	<form action="{{ route('user.store') }}" method="post">
		@csrf
		<label>Nome:</label>
		<input type="text" name="name">

		<label>E-mail:</label>
		<input type="text" name="email">

		<label>Senha:</label>
		<input type="password" name="password">

		<input type="submit" value="Cadastrar Usuário">
	</form>

</body>
</html>