<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf088749ac9a740c3a1e1ec891ccc330
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dummy\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dummy\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcf088749ac9a740c3a1e1ec891ccc330::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcf088749ac9a740c3a1e1ec891ccc330::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
