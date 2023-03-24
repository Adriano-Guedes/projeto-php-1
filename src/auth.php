<?php

function get_user() {
    return $_SESSION['auth'] ?? null;
}

function auth_protection() {
    $user = get_user();

    if (!$user and !resolve('/admin/auth.*')) {
        header('location: /SchoolOfNet/aulaPHP/P/public/index.php/admin/auth/login');
        die();
    }
}

function logout(){
    unset($_SESSION['auth']);
    flash('Desconectado', 'success');
    header('location: /SchoolOfNet/aulaPHP/P/public/index.php/admin/auth/login');
    die();
}