<?php

declare(strict_types=1);

function env_load(string $filepath): void {
    // Выходим, если файл не существует
    if (!file_exists($filepath)) return;

    // Выходим, если файл пуст
    $lines = file($filepath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($lines === false) return;

    // Идем по строкам
    foreach ($lines as $line) {
        $line = trim($line);
        // Пропускаем пустые и комментарии
        if ($line === '' || str_starts_with($line, '#')) continue;

        [$key, $value] = array_pad(explode('=', $line, 2), 2, '');
        $key = trim($key);
        $value = trim($value);

        if ($key !== '') $_ENV[$key] = $value;
    }
}