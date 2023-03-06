<?php 

namespace App\Http;

class Request {
    /**
     * Método HTTP da requisição
     * @var string
     */

    private $httpMethod;

    /**
     * URI da pagina 
     * @var string
     */
    private $uri; 

    /**
     * Parâmetros da URL ($_GET)
     * @var array
     */

    private $queryParams = [];

    /**
     * Variaveis recebidas no POST da página ($_POST)
     */
    private $postVars = [];

    /**
     * Cabeçalho da requisição 
     * @var array 
     */
    private $headers = [];

    /**
     * Contrutor da classe
     */

    public function __construct()
    {
        $this->queryParams = $_GET ?? [];
        $this->postVars = $_POST ?? [];
        $this->headers = getallheaders();
        $this->httpMethod = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri = $_SERVER['REQUEST_URI'] ?? '';
    }

    /**
     * Metodo reponsavel por retornar o metodo HTTP da requisição 
     */

    public function getHttpMethod() {
        return $this->httpMethod;
    }

    /**
     * Método reposnsavel por retornar a URI da requisição
     * @return string 
     */

    public function getUri() {
        return $this->uri;
    }

    /**
     * Método responsavel por retornar os headers da requisição
     * @return array
     */
    public function getHeader() {
        return $this->headers;
    }

    /**
     * Método responsavel por retornar os parametros da URL da requisição
     * @return array
     */

    public function getQueryParams() {
        return $this->queryParams;
    }

           /**
     * Método responsavel por retornar as variaveis POST da requisição
     * @return array
     */
    public function getPostVars() {
        return $this->postVars;
    }

}