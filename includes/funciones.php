<?php

function debuguear($variable): string
{
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}
function s($html): string
{
    $s = htmlspecialchars($html);
    return $s;
}
function pagina_actual($path): bool
{
    return str_contains($_SERVER['PATH_INFO'] ?? '/', $path) ? true : false;
}

function is_auth(): bool
{
    if (!isset($_SESSION)) {
        session_start();
    }
    return isset($_SESSION['nombre']) && !empty($_SESSION);
}

function is_admin(): bool
{
    if (!isset($_SESSION)) {
        session_start();
    }
    return isset($_SESSION['admin']) && !empty($_SESSION['admin']);
}

function aos_animacion(): void
{

    $efectos = ['flip-up', 'zoom-in-down', 'zoom-in-up', 'fade-up', 'fade-down', 'flip-left', 'flip-right'];
    echo $efecto = $efectos[array_rand($efectos, 1)];
}
