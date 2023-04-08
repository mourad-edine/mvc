<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e286259ceb107a1d2da3b556663b7ed
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Router\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/routes',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e286259ceb107a1d2da3b556663b7ed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e286259ceb107a1d2da3b556663b7ed::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0e286259ceb107a1d2da3b556663b7ed::$classMap;

        }, null, ClassLoader::class);
    }
}