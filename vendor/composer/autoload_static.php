<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita80b770e2bc2d20802d9e3893c8d4a87
{
    public static $prefixLengthsPsr4 = array (
        'X' => 
        array (
            'Xianyu\\Enum\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Xianyu\\Enum\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita80b770e2bc2d20802d9e3893c8d4a87::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita80b770e2bc2d20802d9e3893c8d4a87::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
