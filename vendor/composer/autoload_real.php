<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit9e92f3b9ba0d3c825d255adc65db56fb
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

        spl_autoload_register(array('ComposerAutoloaderInit9e92f3b9ba0d3c825d255adc65db56fb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit9e92f3b9ba0d3c825d255adc65db56fb', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit9e92f3b9ba0d3c825d255adc65db56fb::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
