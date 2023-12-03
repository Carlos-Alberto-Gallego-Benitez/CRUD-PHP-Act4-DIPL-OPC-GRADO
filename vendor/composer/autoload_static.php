<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit20774a97e0953e07d181c8235eaabca2
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mini\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mini\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit20774a97e0953e07d181c8235eaabca2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit20774a97e0953e07d181c8235eaabca2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit20774a97e0953e07d181c8235eaabca2::$classMap;

        }, null, ClassLoader::class);
    }
}
