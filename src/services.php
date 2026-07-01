<?php

declare(strict_types=1);

require_once __DIR__.'/helpers.php';
require_once __DIR__.'/repositories.php';

function service_get_post_by_slug(string $slug): array {
    
    return repo_get_post_by_slug($slug);
}