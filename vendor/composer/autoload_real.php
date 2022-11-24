<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita89a4e5ed7b8b196171d5dd91f268b52
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

        spl_autoload_register(array('ComposerAutoloaderInita89a4e5ed7b8b196171d5dd91f268b52', 'loadClassLoader'), true, true);
<<<<<<< Updated upstream
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(\dirname(__FILE__)));
        spl_autoload_unregister(array('ComposerAutoloaderInita89a4e5ed7b8b196171d5dd91f268b52', 'loadClassLoader'));

        $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if ($useStaticLoader) {
            require __DIR__ . '/autoload_static.php';

            call_user_func(\Composer\Autoload\ComposerStaticInita89a4e5ed7b8b196171d5dd91f268b52::getInitializer($loader));
        } else {
            $map = require __DIR__ . '/autoload_namespaces.php';
            foreach ($map as $namespace => $path) {
                $loader->set($namespace, $path);
            }

            $map = require __DIR__ . '/autoload_psr4.php';
            foreach ($map as $namespace => $path) {
                $loader->setPsr4($namespace, $path);
            }

            $classMap = require __DIR__ . '/autoload_classmap.php';
            if ($classMap) {
                $loader->addClassMap($classMap);
            }
        }

        $loader->register(true);

        if ($useStaticLoader) {
            $includeFiles = Composer\Autoload\ComposerStaticInita89a4e5ed7b8b196171d5dd91f268b52::$files;
        } else {
            $includeFiles = require __DIR__ . '/autoload_files.php';
        }
=======
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita89a4e5ed7b8b196171d5dd91f268b52', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita89a4e5ed7b8b196171d5dd91f268b52::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInita89a4e5ed7b8b196171d5dd91f268b52::$files;
>>>>>>> Stashed changes
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequirea89a4e5ed7b8b196171d5dd91f268b52($fileIdentifier, $file);
        }

        return $loader;
    }
}

<<<<<<< Updated upstream
=======
/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
>>>>>>> Stashed changes
function composerRequirea89a4e5ed7b8b196171d5dd91f268b52($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
