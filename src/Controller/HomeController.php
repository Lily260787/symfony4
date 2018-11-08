<?php
/**
 * Created by PhpStorm.
 * User: jdaprato
 * Date: 08/11/18
 * Time: 13:24
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class HomeController
{

    public function index(): Response
    {
        return new Response('Salut les gens');
    }
}