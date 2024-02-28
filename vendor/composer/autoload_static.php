<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit432b0adeecf61923a27bd72cc8164980
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'eftec\\bladeone\\' => 15,
        ),
        'P' => 
        array (
            'Phuon\\LamBaiThi\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'eftec\\bladeone\\' => 
        array (
            0 => __DIR__ . '/..' . '/eftec/bladeone/lib',
        ),
        'Phuon\\LamBaiThi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit432b0adeecf61923a27bd72cc8164980::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit432b0adeecf61923a27bd72cc8164980::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit432b0adeecf61923a27bd72cc8164980::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit432b0adeecf61923a27bd72cc8164980::$classMap;

        }, null, ClassLoader::class);
    }
}
