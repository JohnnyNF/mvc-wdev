<?php


namespace App\Utils;


class View
{

    /**
     * Método reposnsavel por retornar o conteudo de uma view 
     * @param [type] $view
     * @return [type]
     */

    private static function getContentView($view)
    {
        $file = __DIR__ . '/../../resources/view/' . $view . '.html';

        return file_exists($file) ? file_get_contents($file) : '';
    }

    /**
     *  Metodo responsavel por retornar o conteudo renderizado de uma view
     *  @param string $view 
     *  @param array $vars (string/numericos)
     *  @return string
     */

    public static function render($view, $vars = [])
    {
        // criar uma variavel com o conteudo da view 
        $contentView = self::getContentView($view);

        //CHAVES DO ARRAY DE VARIAVEIS 

        $keys = array_keys($vars);
        $keys = array_map(function ($item) {
            return '{{' . $item . '}}';
        }, $keys);

        //RETORNA O CONTEUDO RENDERIZADO 
        return str_replace($keys, array_values($vars), $contentView);
    }
}
