<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4a4ac11ee7002189f197866085bb9831
{
    public static $classMap = array (
        'App\\Controllers\\CompaniesController' => __DIR__ . '/../..' . '/app/controllers/CompaniesController.php',
        'App\\Controllers\\ContactsController' => __DIR__ . '/../..' . '/app/controllers/ContactsController.php',
        'App\\Controllers\\ImagesController' => __DIR__ . '/../..' . '/app/controllers/ImagesController.php',
        'App\\Controllers\\LoginController' => __DIR__ . '/../..' . '/app/controllers/LoginController.php',
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/app/controllers/UsersController.php',
        'App\\core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'App\\models\\LogClass' => __DIR__ . '/../..' . '/app/models/LogClass.php',
        'App\\models\\input' => __DIR__ . '/../..' . '/app/models/input.php',
        'App\\models\\sendCompaniesRequest' => __DIR__ . '/../..' . '/app/models/sendCompaniesRequest.php',
        'App\\models\\sendContactRequest' => __DIR__ . '/../..' . '/app/models/sendContactRequest.php',
        'App\\models\\sendImagesRequest' => __DIR__ . '/../..' . '/app/models/sendImagesRequest.php',
        'App\\models\\sendUserRequest' => __DIR__ . '/../..' . '/app/models/sendUserRequest.php',
        'ComposerAutoloaderInit4a4ac11ee7002189f197866085bb9831' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit4a4ac11ee7002189f197866085bb9831' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/databases/QueryBuilder.php',
        'connection' => __DIR__ . '/../..' . '/core/databases/Connection.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit4a4ac11ee7002189f197866085bb9831::$classMap;

        }, null, ClassLoader::class);
    }
}
