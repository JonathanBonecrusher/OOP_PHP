<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04b4fdff2a8b07f60fe0bfb049bab55a
{
    public static $files = array (
        '14e98eb406e7830ac0ef0e66a5be0ae4' => __DIR__ . '/../..' . '/src/User.php',
        'ddb9dd35a996dd64dc409b596a0c05f5' => __DIR__ . '/../..' . '/src/Cat.php',
        'cc43b54ba88b69dd2d093d7ddc988868' => __DIR__ . '/../..' . '/src/PointFunction.php',
    );

    public static $prefixLengthsPsr4 = array (
        'X' => 
        array (
            'Xtdtuuht\\Task11\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Xtdtuuht\\Task11\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit04b4fdff2a8b07f60fe0bfb049bab55a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit04b4fdff2a8b07f60fe0bfb049bab55a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit04b4fdff2a8b07f60fe0bfb049bab55a::$classMap;

        }, null, ClassLoader::class);
    }
}