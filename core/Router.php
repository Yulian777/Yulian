<?php

include_once 'BaseRouter.php';

class Router extends BaseRouter
{
    public function getControllerName()
    {
        return (isset($_GET['controller']) ? $_GET['controller'] : 'Default') . 'Controller';
    }

    public function getActionName()
    {
        return (isset($_GET['action']) ? $_GET['action'] : 'index') . 'Action';
    }
}