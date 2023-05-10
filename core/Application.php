<?php
/** User: EvgCodegolic ...*/

namespace app\core;

/** 
 * Application class
 * 
 * @author Evg
 * @package app\core 
 */
class Application
{
    /**
     * Summary of router
     * @var Router
     */
    public Router $router;

    /**
     * Summary of request
     * @var Request
     */
    public Request $request;
    
    /**
     * Summary of __construct
     */
    public function __construct()
    {
        $this->request = new Request();
        $this->router  = new Router($this->request);
    }

    /**
     * Summary of run
     * @return void
     */
    public function run()
    {
        $this->router->resolve();
    }
}