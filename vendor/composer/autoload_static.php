<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3ad5638620f00e8f052cfe533d801e98
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
        'V' => 
        array (
            'ViniciusRezende\\AppCrm\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'ViniciusRezende\\AppCrm\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3ad5638620f00e8f052cfe533d801e98::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3ad5638620f00e8f052cfe533d801e98::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3ad5638620f00e8f052cfe533d801e98::$classMap;

        }, null, ClassLoader::class);
    }
}
