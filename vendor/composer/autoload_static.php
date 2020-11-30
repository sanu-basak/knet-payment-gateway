<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf7a323df76f131aeb58d3e7732e83594
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'O2oneLabs\\Knet\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'O2oneLabs\\Knet\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf7a323df76f131aeb58d3e7732e83594::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf7a323df76f131aeb58d3e7732e83594::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}