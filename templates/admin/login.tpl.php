<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Painel administrativo!</title>
        <link href="/SchoolOfNet/aulaPHP/P/public/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <link rel="stylesheet" href="/SchoolOfNet/aulaPHP/P/public/resources/trix/trix.scss">
        <link rel="stylesheet" href="/SchoolOfNet/aulaPHP/P/public/css/style.css">
        <link rel="stylesheet" href="/SchoolOfNet/aulaPHP/P/public/resources/pnotify/pnotify.custom.min.css">


    </head>
  <body class="d-flex flex-column">
    <div id="header">
        <nav class="navbar navbar-dark bg-dark">
            <span>
                <a href="/SchoolOfNet/aulaPHP/P/public/index.php/admin" class="navbar-brand">Admin</a>
                <span class="navbar-text">
                    Painel administrativo
                </span>
            </span>
        </nav>


    
        <div id="main">
            <div class="row justify-content-center">
                <div id="content" class="col-4 align-self-center">
                    <?php include $content ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="/SchoolOfNet/aulaPHP/P/public/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/SchoolOfNet/aulaPHP/P/public/resources/pnotify/pnotify.custom.min.js"></script>


    <script>
        <?php flash(); ?>

    </script>

</body>
</html>