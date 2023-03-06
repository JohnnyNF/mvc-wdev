<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page
{

    /***
     * Método responsavel por retornar o conteudo da view da nosa home
     *   @return string
     */
    public static function getHome()
    {
        $obOrganization = new Organization;

        //View da home
        $corpo =  View::render('pages/home', [
            'name' => $obOrganization->name,
            'description' => $obOrganization->descricao,
            'site' => $obOrganization->site
        ]);

        //retorna a view da pagina 
        // echo "opaaa";die;
        return parent::getPage('WDEV - Canal - Home', $corpo);
    }
}
