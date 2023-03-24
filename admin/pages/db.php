<?php 

function pages_get_data ($redirectOnError) {
    $title = filter_input(INPUT_POST, 'title');
    $URL = filter_input(INPUT_POST, 'URL');
    $body = filter_input(INPUT_POST, 'body');

    if (!$title) {
        flash('Informe o campo de título', 'error');
        header('location: ' . $redirectOnError);
        die();
    }

    return compact('title', 'body', 'URL');
};

$pages_all = function() use ($conn) {
    $result = $conn->query('SELECT * FROM pages');
    return $result->fetch_all(MYSQLI_ASSOC);
};

$pages_one = function ($id) use ($conn){
    $sql = 'SELECT * FROM pages WHERE id=?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();

    $result = $stmt->get_result();
    return $result->fetch_assoc();
};

$pages_create = function () use ($conn) {
    $data = pages_get_data('/SchoolOfNet/aulaPHP/P/public/index.php/admin/pages/create');

    $sql = 'INSERT INTO pages (title, body, URL, updated, created) VALUES (?, ?, ?, NOW(), NOW())';

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $data['title'], $data['body'], $data['URL']);

    flash('Criou registro com sucesso', 'success');

    return $stmt->execute();
};

$pages_edit = function($id) use ($conn) {
    $data = pages_get_data('/SchoolOfNet/aulaPHP/P/public/index.php/admin/pages/' . $id . '/edit');

    $sql = 'UPDATE pages SET title=?, body=?, URL=?, updated=NOW() WHERE id=?';

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssi', $data['title'], $data['body'], $data['URL'], $id);

    return $stmt->execute();
    flash('Registro atualizado com sucesso!', 'success');
};

$pages_delete = function($id) use ($conn){
    $sql = 'DELETE FROM pages WHERE id=?';

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);

    flash('Registro removido com sucesso!', 'success');
    return $stmt->execute();
};