<?php

/**
 * Cargamos la vista.
 *
 * @param  string $name
 * @param  array  $data
 */
function view($name, $data = [])
{
    extract($data);

    return require "app/views/{$name}.view.php";
}

/**
 * Redirección a una página.
 *
 * @param  string $path
 */
function redirect($path)
{
    header("Location: /{$path}");
}
