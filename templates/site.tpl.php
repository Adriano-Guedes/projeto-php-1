<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/SchoolOfNet/aulaPHP/P/public/resources/pnotify/pnotify.custom.min.css">
    <link rel="stylesheet" href="/SchoolOfNet/aulaPHP/P/public/site.css">
</head>
<body>
    <header id="header">
        <h1>Bem vindo</h1>
    </header>

    <ul id="nav">
        <?php foreach ($data['pages'] as $item): ?>
            <li><a href="/SchoolOfNet/aulaPHP/P/public/index.php/<?php echo $item['URL']?>"><?php echo $item['title']?></a></li>
        <?php endforeach; ?>
        <li><a href="/SchoolOfNet/aulaPHP/P/public/index.php/contato">Contato</a></li>
    </ul>

    <main id="content">
        <?php include $content; ?>
    </main>

    <p id="footer"><small><?php echo date('Y'); ?> - todos os direitos reservados</small></p>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="/SchoolOfNet/aulaPHP/P/public/resources/pnotify/pnotify.custom.min.js"></script>
    <script>
        <?php flash(); ?>
    </script>
</body>
</html>