<?php

declare(strict_types=1);

require_once __DIR__.'/helpers.php';
require_once __DIR__.'/repositories.php';

function get_post_by_slug(string $slug): array {
    
    return repo_get_post_by_slug($slug);
}

function is_page_exists(string $page): bool {

    return file_exists(__DIR__."/../{$page}");
}

function is_post_exists(string $slug): bool {

    return !!get_post_by_slug($slug);
}