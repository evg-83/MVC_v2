<?php
/** User: EvgCodegolic ...*/

namespace app\core;

/** 
 * router class 
 * 
 * @author Evg
 * @package app\core 
 */
class Router
{
    /**
     * Summary of request
     * @var Request
     */
    public Request $request;
    
    /**
     * Summary of routes
     * @var 
     */
    protected array $routes = [];
    
    /**
     * Router constructor
     * 
     * @param \app\core\Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    
    /**
     * Summary of get
     * @param mixed $path
     * @param mixed $callback
     * @return void
     */
    public function get($path, $callback)
    {
        $this->routes[ 'get' ][ $path ] = $callback;
    }

    /**
     * Summary of resolve
     * @return void
     */
    public function resolve()
    {
        $path   = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[ $method ][ $path ];
        echo '<pre>';
        var_dump($callback);
        echo '</pre>';
        exit;
    }
}
// 23:17