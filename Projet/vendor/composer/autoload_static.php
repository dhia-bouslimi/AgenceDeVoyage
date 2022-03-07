<<<<<<< Updated upstream
<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7e87becc9877c7ccdf3bd3372e6d7aeb
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Flex\\' => 13,
        ),
        'A' => 
        array (
            'App\\Tests\\' => 10,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Flex\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/flex/src',
        ),
        'App\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7e87becc9877c7ccdf3bd3372e6d7aeb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7e87becc9877c7ccdf3bd3372e6d7aeb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7e87becc9877c7ccdf3bd3372e6d7aeb::$classMap;

        }, null, ClassLoader::class);
    }
}
=======
<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7e87becc9877c7ccdf3bd3372e6d7aeb
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Flex\\' => 13,
        ),
        'A' => 
        array (
            'App\\Tests\\' => 10,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Flex\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/flex/src',
        ),
        'App\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7e87becc9877c7ccdf3bd3372e6d7aeb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7e87becc9877c7ccdf3bd3372e6d7aeb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7e87becc9877c7ccdf3bd3372e6d7aeb::$classMap;

        }, null, ClassLoader::class);
    }
}
>>>>>>> Stashed changes
