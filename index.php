<?php
    require 'App/Traits/GreetingTrait.php';
    require 'App/Traits/LoggerTrait.php';
    require 'App/Traits/MyService.php';
    
    use App\Services\MyService;

    $service = new MyService();
    $service -> run();
?>