<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjord+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="\recurso\estilo.css">
    <link rel="stylesheet" href="\recurso\exercicio.css">
    <link rel="shortcut icon" href="recurso/\caveira.png"  type="image/png"/>
    <title>Exercício</title>
</head>

<body class="exercicio">

    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> class="menu_navegacao">Sem formatação</a>
        <a href="index.php" class="menu_navegacao">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
        <?php include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php") ?> 
        </div>
    </main>
    <footer class="rodape">
        © <?= date('Y');?> Udemy, Inc.
    </footer>
</body>

</html>