<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf14df73e0c724438faa9decc33f0f551
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nextek\\Uploader\\' => 16,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nextek\\Uploader\\' => 
        array (
            0 => __DIR__ . '/../..' . '/packages/dafari/uploader/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf14df73e0c724438faa9decc33f0f551::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf14df73e0c724438faa9decc33f0f551::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}