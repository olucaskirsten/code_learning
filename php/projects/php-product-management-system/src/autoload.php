<?php

spl_autoload_register(function (string $className): void {
    $prefix = 'App\\';
    $baseDirectory = __DIR__ . '/';

    if (!str_starts_with($className, $prefix)) {
        return;
    }

    $relativeClass = substr($className, strlen($prefix));
    $file = $baseDirectory . str_replace('\\', '/', $relativeClass) . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});
