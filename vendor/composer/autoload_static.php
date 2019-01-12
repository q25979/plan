<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3e099cf1bba3c5c2d8c5f5c3f3d9da51
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\composer\\' => 15,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-installer/src',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3e099cf1bba3c5c2d8c5f5c3f3d9da51::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3e099cf1bba3c5c2d8c5f5c3f3d9da51::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}