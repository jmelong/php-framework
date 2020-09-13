<?php


namespace app\core\middlewares;


/**
 * Class baseMiddleware
 * @package app\core\middlewares
 */
abstract class BaseMiddleware
{
    abstract public function execute();
}