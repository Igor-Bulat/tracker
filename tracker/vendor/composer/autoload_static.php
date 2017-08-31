<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit90a7be9d6b20db6a246228689cff15c1
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Ramsey\\Uuid\\' => 12,
        ),
        'G' => 
        array (
            'Gregwar\\Captcha\\' => 16,
        ),
        'C' => 
        array (
            'Crossjoin\\Css\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ramsey\\Uuid\\' => 
        array (
            0 => __DIR__ . '/..' . '/ramsey/uuid/src',
        ),
        'Gregwar\\Captcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/gregwar/captcha',
        ),
        'Crossjoin\\Css\\' => 
        array (
            0 => __DIR__ . '/..' . '/crossjoin/css/src/Crossjoin/Css',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'G' => 
        array (
            'Gregwar\\Image' => 
            array (
                0 => __DIR__ . '/..' . '/gregwar/image',
            ),
            'Gregwar\\Cache' => 
            array (
                0 => __DIR__ . '/..' . '/gregwar/cache',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit90a7be9d6b20db6a246228689cff15c1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit90a7be9d6b20db6a246228689cff15c1::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit90a7be9d6b20db6a246228689cff15c1::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
