<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit51f48451b500a1b9bdc86031173cb5fd
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit51f48451b500a1b9bdc86031173cb5fd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit51f48451b500a1b9bdc86031173cb5fd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
