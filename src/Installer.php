<?php

namespace Micre\SwaggerInstaller;

class Installer
{
    public static function installSwagger()
    {
        echo "Installing Swagger...\n";

        // Composer require
        system('composer require darkaonline/l5-swagger');

        // Artisan commands
        system('php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"');
        system('php artisan jwt:secret');
        system('php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"');

        echo "Swagger installed successfully!\n";
    }
}
