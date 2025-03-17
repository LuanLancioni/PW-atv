<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <title>Home</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="{{ route('index') }}">Home</a>
                    <a class="nav-link active" href="{{ route('segunda') }}">2 página</a>
                    <a class="nav-link active" href="{{ route('terceira') }}">3 página</a>
                    <a class="nav-link active" href="{{ route('quarta') }}">4 página</a>
                    <a class="nav-link active" href="{{ route('quinta') }}">5 página</a>
                </div>
            </div>
        </div>
    </nav>

    <h1 class="text-center">Olá, este é um site de exemplo de rotas veja as demais páginas a cima</h1>
    <h4 class="text-center">Essa é a terceira página, vai um formulário?</h4>

    <div class="container text-center">
        <form>
            <div class="mb-3">
                <label for="example" class="form-label">Caixa de texto</label>
                <input type="email" class="form-control" id="example" placeholder="Texto de exmplo">
            </div>
            <div class="mb-3">
                <label for="example2" class="form-label">Caixa de texto de senha</label>
                <input type="password" class="form-control" id="example2" placeholder="Texto secreto"> 
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1"> <-- Checkbox</label>
            </div>
            <div class="mb-3">
                <label for="disabledText" class="form-label">Caixa de texto desativada</label>
                <input type="text" id="disabledText" class="form-control" placeholder="Não adianta clicar aqui">
            </div>
            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Select desativado</label>
                <select id="disabledSelect" class="form-select">
                    <option>Também não adianta clicar aqui</option>
                </select>
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                    <label class="form-check-label" for="disabledFieldsetCheck"> <-- Checkbox mas sem checks</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

</body>

</html>