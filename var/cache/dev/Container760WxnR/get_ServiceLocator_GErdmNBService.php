<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.GErdmNB' shared service.

return $this->privates['.service_locator.GErdmNB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'category' => ['privates', '.errored..service_locator.GErdmNB.App\\Entity\\Article', NULL, 'Cannot autowire service ".service_locator.GErdmNB": it references class "App\\Entity\\Article" but no such service exists.'],
]);
