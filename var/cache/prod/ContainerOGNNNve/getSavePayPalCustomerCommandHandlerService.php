<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Customer\CommandHandler\SavePayPalCustomerCommandHandler' shared service.

return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Customer\\CommandHandler\\SavePayPalCustomerCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Customer\CommandHandler\SavePayPalCustomerCommandHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCustomerRepository'] ?? $this->load('getPayPalCustomerRepositoryService.php')));