<?php
if (!empty($_POST)) {
    $to = "zakaz@akabo.ru";
    $subject = "Новая заявка на сайте";
    $message = "Клиент: {$_POST['customer']}\nТелефон: {$_POST['phone']}";

    if (isset($_POST['email'])) $message .= "\nEmail: {$_POST['email']}";
    if (isset($_POST['task'])) $message .= "\nЗадача: {$_POST['task']}";

    $protocol = (!empty($_SERVER['HTTPS'])) ? 'https' : 'http';

    if (mail($to, $subject, $message)) {
        header("Location: {$protocol}://{$_SERVER['HTTP_HOST']}/index.php?result=sucсess");
    } else {
        header("Location: {$protocol}://{$_SERVER['HTTP_HOST']}/index.php?result=fail");
    }
}