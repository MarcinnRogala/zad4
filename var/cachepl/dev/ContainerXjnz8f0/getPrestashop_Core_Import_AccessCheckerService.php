<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.import.access_checker' shared service.

return $this->services['prestashop.core.import.access_checker'] = new \PrestaShop\PrestaShop\Core\Import\Access\ImportAccessChecker(${($_ = isset($this->services['prestashop.adapter.data_provider.employee']) ? $this->services['prestashop.adapter.data_provider.employee'] : $this->load('getPrestashop_Adapter_DataProvider_EmployeeService.php')) && false ?: '_'});