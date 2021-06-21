<!DOCTYPE html>
<html>
<head>
	<title>Editar Produtos</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<h1 style="text-align: center;">Editar Produto</h1>
	@if (session('mensagem'))
		<p>{{session('mensagem')}}</p>
	@endif
	@if ($errors->any())
	    <div >
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	<form action="/produtos/gravar/{{ $produtos->id }}" method="post">
		@csrf
		<p>
			<label for="slug">Nome: </label>
			<input type="text" class="form-control" name="slug" value="{{ $produtos ->slug }}">
		</p>
		<p>
			<label for="descricao">Descricao: </label>
			<input type="text" class="form-control" name="descricao" value="{{ $produtos ->descricao }}">
		</p>
		<p>
			<label for="quantidade">Quantidade: </label>
			<input type="number" class="form-control"  name="quantidade" value="{{ $produtos ->quantidade }}">
		</p>
		<p>
			<label for="valor">Valor: </label>
			<input type="number" class="form-control" 	 name="valor" value="{{ $produtos ->valor}} ">
		</p>
		<p>
			<input type="submit" class="btn btn-primary" style="text-align: center;" value="Gravar">
			<a class="btn btn-primary" href="/produtos">Voltar</a>
		</p>	
	</form>
</body>
</html>