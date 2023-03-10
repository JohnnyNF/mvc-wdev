<?php

namespace App\Http;

class Router {
    
    /**
     * URL completa do projeto (raiz)
     * @var string
     */
    private $url = '';

    /**
     * Prefixo de todas as rotas 
     * @var string  
     */
    private $prefix = '';

    /**
     * Indice de rotas 
     * @var array
     */
    private $routes = [];

    /**
     * Instancia de Request
     * @var Request
     */
    private $request; 

    /**
     * Método responsável por iniciar a classe
     * @param string $url 
     */

    public function __construct($url)
    {
        $this->request = new Request();
        $this->url     = $url;
        
    }
}
