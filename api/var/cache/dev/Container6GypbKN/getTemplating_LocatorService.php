<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'templating.locator' shared service.

@trigger_error('The "templating.locator" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

return $this->privates['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(($this->privates['file_locator'] ?? ($this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)), '/code/src/Resources', [0 => '/code/src']))), $this->targetDirs[0]);
