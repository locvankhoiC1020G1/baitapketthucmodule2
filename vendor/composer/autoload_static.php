<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfbe924dd6f3ca2f6c3ce68b11374a7b6
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfbe924dd6f3ca2f6c3ce68b11374a7b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfbe924dd6f3ca2f6c3ce68b11374a7b6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}