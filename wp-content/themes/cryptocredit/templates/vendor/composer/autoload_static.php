<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit605b2cf8b64818405d1a3695a83fa415
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit605b2cf8b64818405d1a3695a83fa415::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit605b2cf8b64818405d1a3695a83fa415::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit605b2cf8b64818405d1a3695a83fa415::$classMap;

        }, null, ClassLoader::class);
    }
}