<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit85289b60fa8e0ced8905993257875854
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vendor\\Wordpress\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vendor\\Wordpress\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit85289b60fa8e0ced8905993257875854::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit85289b60fa8e0ced8905993257875854::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit85289b60fa8e0ced8905993257875854::$classMap;

        }, null, ClassLoader::class);
    }
}
