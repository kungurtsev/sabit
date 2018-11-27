<?php

if (isset($_POST['curse']) &&
    isset($_POST['name']) &&
    isset($_POST['number']) &&
    isset($_POST['email']) &&
    isset($_POST['comment'])) {
    echo json_encode([
        'name' => $_POST['name'],
        'email' => $_POST['email']
    ]);
}