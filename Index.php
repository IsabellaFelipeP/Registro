<!DOCTYPE HTML>
<html lang="pt-br" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" type="text/css" href="Marcador.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title> Acesso Gerenciador</title>
</head>

<body>
<div class="container ">
    <div class="row ">
        <div class = "col-md-12 Marcador">
            <div class = "page-header"> <!--Serve para colocar uma linha embaixo do texto-->
                <h1> Bem-Vindo! </h1>
            </div>
        </div>
    </div>

<div class="container ">
    <div class = "row">
        <div class = "col-md-8">
            <h3>Acesso do Gerenciador</h3>
            <form role="form" action="Cliente.php" method="post">
                <div class="form-group"> <!--Agrupar elementos de um formulario-->
                    <label for="Nome">
                        Nome:
                    </label>
                    <input type="text" class="form-control" id="Nome">
                </div>

                <div class="form-group">
                    <label for="Senha">
                        Senha:
                    </label>
                    <input type="password" class="form-control" id="Senha">
                </div>

                <a href="Detalhes.php" class="btn btn-primary">Entrar</a>
            </form>
        </div>
    </div>

                <div class = "row">
                    <div class = "col-md-4">
                        <h3>Cadastrar Gerenciador</h3>
                        <form role="form" action="Index.php" method="post">
                            <div class="form-group">
                                <label for="Nome">
                                    Nome:
                                </label>
                                <input type="text" class="form-control" id="Nome">
                            </div>

                            <label for="Senha">
                                Senha:
                            </label>
                            <input type="password" class="form-control" id="Senha">

                            <label for="Email">
                                Email:
                            </label>
                            <input type="text" class="form-control" id="Email">

                           <button type="submit" class="btn btn-primary">Cadastrar</button>


                        </form>
                     </div>
                </div>
        </div>
</div>

</body>

<

</html>