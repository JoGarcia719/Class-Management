<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit418df42f92d8ca29151a2d6beb78855d
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jo\\Pdc10Classes\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jo\\Pdc10Classes\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit418df42f92d8ca29151a2d6beb78855d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit418df42f92d8ca29151a2d6beb78855d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit418df42f92d8ca29151a2d6beb78855d::$classMap;

        }, null, ClassLoader::class);
    }
}
