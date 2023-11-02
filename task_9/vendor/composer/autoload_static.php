<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04b4fdff2a8b07f60fe0bfb049bab55a
{
    public static $files = array (
        '604c1694f44c12d7bc827e0b0bfd4f2d' => __DIR__ . '/../..' . '/src/Point.php',
        '5701f90fa6e1975d1ade450b9e73f772' => __DIR__ . '/../..' . '/src/PointFunction.php',
    );

    public static $prefixLengthsPsr4 = array (
        'X' => 
        array (
            'Xtdtuuht\\Task9\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Xtdtuuht\\Task9\\' => 
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