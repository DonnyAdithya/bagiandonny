<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf13bc93c311de065d39c216e084a25c
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitcf13bc93c311de065d39c216e084a25c::$classMap;

        }, null, ClassLoader::class);
    }
}
