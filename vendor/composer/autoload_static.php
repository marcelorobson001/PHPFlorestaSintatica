<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9eede625050c3b7245b391128f056826
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'marcelorobson001\\PHPFlorestaSintatica\\' => 38,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'marcelorobson001\\PHPFlorestaSintatica\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9eede625050c3b7245b391128f056826::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9eede625050c3b7245b391128f056826::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9eede625050c3b7245b391128f056826::$classMap;

        }, null, ClassLoader::class);
    }
}
