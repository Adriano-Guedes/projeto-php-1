<?php

require __DIR__ . '/../admin/pages/db.php';

auth_protection();

if (resolve('/contato')){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $from = filter_input(INPUT_POST, 'from');
        $subject = filter_input(INPUT_POST, 'subject');
        $message = filter_input(INPUT_POST, 'message');
        $headers = 'From: ' . $from . "\r\n" . 
            'Reply-to: ' . $from . "\r\n" . 
            'X-Mailer: PHP/' . phpversion();
 
        if (mail('adriano.guedes@soulasalle.com.br', $subject, $message, $headers)) {
            flash('Email enviado com sucesso', 'success');
        } else {
            flash('Falha ao enviar o email', 'error');
        }

        return header('location: /contato');
    }
    $pages = $pages_all();
    render('site/contato', 'site', compact('pages'));
} elseif ($params = resolve('/(.*)')){
    $pages = $pages_all();
    foreach ($pages as $page) {
        if ($page['URL'] == $params[1]) {
            break;
        }
    }
    render('site/page', 'site', compact('pages', 'page'));
}