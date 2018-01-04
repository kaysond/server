<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitFiles_Versions
{
    public static $firstCharsPsr4 = array (
        'O' => true,
    );

    public static $prefixDirsPsr4 = array (
        'OCA\\Files_Versions\\' => 
        array (
            0 => __DIR__ . '/..' . '/../lib',
        ),
    );

    public static $classMap = array (
        'OCA\\Files_Versions\\AppInfo\\Application' => __DIR__ . '/..' . '/../lib/AppInfo/Application.php',
        'OCA\\Files_Versions\\BackgroundJob\\ExpireVersions' => __DIR__ . '/..' . '/../lib/BackgroundJob/ExpireVersions.php',
        'OCA\\Files_Versions\\Capabilities' => __DIR__ . '/..' . '/../lib/Capabilities.php',
        'OCA\\Files_Versions\\Command\\CleanUp' => __DIR__ . '/..' . '/../lib/Command/CleanUp.php',
        'OCA\\Files_Versions\\Command\\Expire' => __DIR__ . '/..' . '/../lib/Command/Expire.php',
        'OCA\\Files_Versions\\Command\\ExpireVersions' => __DIR__ . '/..' . '/../lib/Command/ExpireVersions.php',
        'OCA\\Files_Versions\\Controller\\PreviewController' => __DIR__ . '/..' . '/../lib/Controller/PreviewController.php',
        'OCA\\Files_Versions\\Events\\CreateVersionEvent' => __DIR__ . '/..' . '/../lib/Events/CreateVersionEvent.php',
        'OCA\\Files_Versions\\Expiration' => __DIR__ . '/..' . '/../lib/Expiration.php',
        'OCA\\Files_Versions\\Hooks' => __DIR__ . '/..' . '/../lib/Hooks.php',
        'OCA\\Files_Versions\\Storage' => __DIR__ . '/..' . '/../lib/Storage.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->firstCharsPsr4 = ComposerStaticInitFiles_Versions::$firstCharsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitFiles_Versions::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitFiles_Versions::$classMap;

        }, null, ClassLoader::class);
    }
}
