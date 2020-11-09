<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdad71f6abfc82058904ebe0b185c083b
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdad71f6abfc82058904ebe0b185c083b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdad71f6abfc82058904ebe0b185c083b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
