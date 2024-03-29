<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4bc9b3fb92082c023a7fb9f56399ec0d
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4bc9b3fb92082c023a7fb9f56399ec0d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4bc9b3fb92082c023a7fb9f56399ec0d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4bc9b3fb92082c023a7fb9f56399ec0d::$classMap;

        }, null, ClassLoader::class);
    }
}
