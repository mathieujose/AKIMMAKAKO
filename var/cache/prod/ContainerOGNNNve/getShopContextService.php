<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PrestashopCheckout\ShopContext' shared service.

return $this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext'] = new \PrestaShop\Module\PrestashopCheckout\ShopContext(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Environment\\Env'] ?? $this->load('getEnv2Service.php')));
