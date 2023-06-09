<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec04389bb0352499d3e2209f814365cf
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
        'H' => 
        array (
            'Hackeringtrue\\PrankSms\\' => 23,
        ),
        'B' => 
        array (
            'Bamarni\\Composer\\Bin\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
        'Hackeringtrue\\PrankSms\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Bamarni\\Composer\\Bin\\' => 
        array (
            0 => __DIR__ . '/..' . '/bamarni/composer-bin-plugin/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitec04389bb0352499d3e2209f814365cf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec04389bb0352499d3e2209f814365cf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitec04389bb0352499d3e2209f814365cf::$classMap;

        }, null, ClassLoader::class);
    }
}
