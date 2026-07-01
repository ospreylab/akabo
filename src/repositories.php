<?php

declare(strict_types=1);

require_once __DIR__.'/helpers.php';

function repo_get_post_by_slug(string $slug): array {
    $mysqli = repo_connect();

    $query = "SELECT `title`, `description`, `created_at` FROM `posts` WHERE `slug` = '{$slug}' LIMIT 1";
    
    return mysqli_fetch_assoc(mysqli_query($mysqli, $query)) ?? [];
}

function repo_connect(): mysqli {
    // Загружаем настройки из .env
    env_load(__DIR__.'/../.env');

    $mysqli = mysqli_connect($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB_NAME'], (int)$_ENV['DB_PORT']);

    return $mysqli;
}