<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit108959cb314015d8862269752ccd16b5
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'controllers\\' => 12,
        ),
        'T' => 
        array (
            'Tuupola\\Middleware\\' => 19,
            'Tuupola\\Http\\Factory\\' => 21,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Server\\' => 16,
            'Psr\\Http\\Message\\' => 17,
        ),
        'N' => 
        array (
            'Neomerx\\Cors\\' => 13,
        ),
        'I' => 
        array (
            'Interop\\Http\\Factory\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
        'Tuupola\\Middleware\\' => 
        array (
            0 => __DIR__ . '/..' . '/tuupola/callable-handler/src',
            1 => __DIR__ . '/..' . '/tuupola/cors-middleware/src',
        ),
        'Tuupola\\Http\\Factory\\' => 
        array (
            0 => __DIR__ . '/..' . '/tuupola/http-factory/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-server-handler/src',
            1 => __DIR__ . '/..' . '/psr/http-server-middleware/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Neomerx\\Cors\\' => 
        array (
            0 => __DIR__ . '/..' . '/neomerx/cors-psr7/src',
        ),
        'Interop\\Http\\Factory\\' => 
        array (
            0 => __DIR__ . '/..' . '/http-interop/http-factory/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit108959cb314015d8862269752ccd16b5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit108959cb314015d8862269752ccd16b5::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit108959cb314015d8862269752ccd16b5::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
