<?php
/**
 * Based on Twig 3.14 with HTMLExtra and String Extensions
 */ 

spl_autoload_register(function ($classname)
{
    $dirs = ['./plugin/'];
    foreach ($dirs as $dir) {
        $filename = $dir . str_replace('\\', '/', $classname) .'.php';
        if (file_exists($filename)) {
            require_once $filename;
            break;
        }
    }
});

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'cache' => 'cache',
]);
$twig->addExtension(new \Twig\Extra\Html\HtmlExtension());
$twig->addExtension(new \Twig\Extra\String\StringExtension());
$twig->addExtension(new \Twig\Extension\StringLoaderExtension());

print $twig->render('index.html', ['name' => 'Max']);
