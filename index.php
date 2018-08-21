<html>
    <head>
        <meta charset="utf-8">
        <title>Tarefas</title>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <header id="cabecalho">
            <h1 id="titulo">Tarefas</h1>
            <h2 id="sub-titulo">Trabalho de desenvolvimento para a internet feito por Francisco Rubens</h2>
        </header>
        <section id="corpo">
            <div id="form">
                <?php
                    include 'form.php'; 
                ?>
            </div>
            <div id="lista">
                <?php
                    include 'lista.php';
                ?>
            </div>
        </section>
    </body>
</html>