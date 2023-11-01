<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitab19d04ac42e6df2196f98f38bd86a0f
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitab19d04ac42e6df2196f98f38bd86a0f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitab19d04ac42e6df2196f98f38bd86a0f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitab19d04ac42e6df2196f98f38bd86a0f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
