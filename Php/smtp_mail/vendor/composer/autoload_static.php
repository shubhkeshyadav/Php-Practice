<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b7df44f91f4e2523b5b89b5f48a4191
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b7df44f91f4e2523b5b89b5f48a4191::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b7df44f91f4e2523b5b89b5f48a4191::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4b7df44f91f4e2523b5b89b5f48a4191::$classMap;

        }, null, ClassLoader::class);
    }
}