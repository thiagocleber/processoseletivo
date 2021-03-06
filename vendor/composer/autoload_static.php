<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit637aba3db3db660eb6f69d0e67d66f54
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jarouche\\ViaCEP\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jarouche\\ViaCEP\\' => 
        array (
            0 => __DIR__ . '/..' . '/jarouche/viacep/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit637aba3db3db660eb6f69d0e67d66f54::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit637aba3db3db660eb6f69d0e67d66f54::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
