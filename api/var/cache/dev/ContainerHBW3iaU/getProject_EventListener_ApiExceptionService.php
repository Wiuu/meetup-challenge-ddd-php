<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'project.event_listener.api_exception' shared service.

include_once $this->targetDirs[3].'/src/MeetVonq/App/EventListener/ApiExceptionListener.php';

return $this->privates['project.event_listener.api_exception'] = new \App\MeetVonq\App\EventListener\ApiExceptionListener('%kernel.debug%');
