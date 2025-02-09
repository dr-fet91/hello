<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0a4b7ff7a01c5432e97c26b6e4c4969
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Drfet\\Hello\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Drfet\\Hello\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite0a4b7ff7a01c5432e97c26b6e4c4969::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite0a4b7ff7a01c5432e97c26b6e4c4969::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite0a4b7ff7a01c5432e97c26b6e4c4969::$classMap;

        }, null, ClassLoader::class);
    }
}
