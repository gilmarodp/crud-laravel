<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Listagem de Usuários</title>
</head>
<body>

	<table>
		<tr>
			<td>ID</td>
			<td>Nome</td>
			<td>E-mail</td>
			<td>Ações</td>
		</tr>

		@foreach($users as $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>
					<a href="{{ route('user.show', ['user' => $user->id]) }}">
						<input type="button" value="Ver Usuário">
					</a>
					<br>
					<a href="{{ route('user.edit', ['user' => $user->id]) }}">
						<input type="button" value="Editar Usuário">
					</a>

					<form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="post">
						@csrf
						@method('delete')
						<input type="submit" value="Remover Usuário">
					</form>
				</td>
			</tr>

		@endforeach
	</table>

	<hr>

	<a href="{{ route('user.create') }}">
		<input type="button" value="Criar Usuário">
	</a>

</body>
</html>