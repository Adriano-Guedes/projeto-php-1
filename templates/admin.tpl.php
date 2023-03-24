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
  <body class="d-flex" flex-column>
    <div id="header">
        <nav class="navbar navbar-dark bg-dark">
            <span>
                <a href="/SchoolOfNet/aulaPHP/P/public/index.php/admin" class="navbar-brand">Admin</a>
                <span class="navbar-text">
                    Painel administrativo
                </span>
            </span>
            <a href="/SchoolOfNet/aulaPHP/P/public/index.php/admin/auth/logout" class="btn btn-danger"><!--botão logout-->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                <path d="M7 12h14l-3 -3m0 6l3 -3"></path>
                </svg>
            </a>
        </nav>


    
    <div id="main">
        <div class="row">
            <div class="col">
                <ul id="main-menu" class="nav flex-column nav-pills bg-secundary text-white p-2">
                    <li class="nav-item">
                        <span class="nav-link text-white-50"><small>MENU</small></span>
                    </li>
                    <li class="nav-item">
                        <a href="/SchoolOfNet/aulaPHP/P/public/index.php/admin/pages" class="nav-link<?php if (resolve('/admin/pages.*')): ?> active<?php endif; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-info" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                            <path d="M11 14h1v4h1"></path>
                            <path d="M12 11h.01"></path>
                            </svg>Páginas</a>
                    </li>
                    <li class="nav-item">
                        <a href="/SchoolOfNet/aulaPHP/P/public/index.php/admin/users" class="nav-link<?php if (resolve('/admin/users.*')): ?> active<?php endif; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                            </svg>Usuários</a>
                    </li>
                </ul>
            </div>
            <div id="content" class="col-10">
                <?php include $content ?>
            </div>
        </div>
        
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="/SchoolOfNet/aulaPHP/P/public/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/SchoolOfNet/aulaPHP/P/public/resources/trix/trix.js"></script>
    <script src="/SchoolOfNet/aulaPHP/P/public/resources/pnotify/pnotify.custom.min.js"></script>


    <script>
        <?php flash(); ?>

        const confirmEl = document.querySelector('.confirm');
        if (confirmEl) {
            confirmEl.addEventListener('click', function(e){
                e.preventDefault();
                if (confirm('Tem certeza disso?')){
                    window.location = e.target.getAttibute('href');
                }
            });
        }
    </script>

</body>
</html>