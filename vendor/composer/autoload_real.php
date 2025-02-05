<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite0a4b7ff7a01c5432e97c26b6e4c4969
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInite0a4b7ff7a01c5432e97c26b6e4c4969', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite0a4b7ff7a01c5432e97c26b6e4c4969', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite0a4b7ff7a01c5432e97c26b6e4c4969::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
