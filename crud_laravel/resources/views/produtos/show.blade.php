<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Detalhes do Produto</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $produto->nome }}</h5>
                <p class="card-text">{{ $produto->descricao }}</p>
                <p class="card-text"><strong>Preço:</strong> {{ $produto->preco }}</p>
                <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
