<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Page
{

    /**
     * Método responsavel por renderizar o topo da pagina
     * @return string
     */
    private static function getHeader()
    {
        return View::render('pages/header');
    }

    private static function getFooter()
    {
        return View::render('pages/footer');
    }


    /***
     * Método responsavel por retornar o conteudo da view da nossa pagina
     *
     * @return string
     */
    public static function getPage($title, $corpo)
    {
        return View::render('pages/page', [
            'title' => $title,
            'header' => self::getHeader(),
            'corpo' => $corpo,
            'footer' => self::getFooter()

        ]);
    }
}
