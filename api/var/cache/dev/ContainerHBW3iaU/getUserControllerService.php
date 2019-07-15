<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\MeetVonq\Http\Controller\UserController' shared autowired service.

include_once $this->targetDirs[3].'/src/MeetVonq/Http/Controller/UserController.php';
include_once $this->targetDirs[3].'/src/MeetVonq/Domain/User/UserService.php';
include_once $this->targetDirs[3].'/vendor/league/fractal/src/TransformerAbstract.php';
include_once $this->targetDirs[3].'/src/MeetVonq/Domain/User/UserTransformer.php';
include_once $this->targetDirs[3].'/vendor/league/fractal/src/Manager.php';
include_once $this->targetDirs[3].'/src/MeetVonq/App/Support/FractalService.php';

$a = ($this->services['project.fractal.manager'] ?? ($this->services['project.fractal.manager'] = new \App\MeetVonq\App\Support\FractalService('http://127.0.0.1:9002/api')));

return $this->services['App\\MeetVonq\\Http\\Controller\\UserController'] = new \App\MeetVonq\Http\Controller\UserController(new \App\MeetVonq\Domain\User\UserService(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), $a, new \App\MeetVonq\Domain\User\UserTransformer()), ($this->services['router'] ?? $this->getRouterService()), $a);
