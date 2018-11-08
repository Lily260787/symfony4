<?php
/**
 * Created by PhpStorm.
 * User: jdaprato
 * Date: 08/11/18
 * Time: 13:24
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class HomeController
{

    /**
     * @var Environment
     */
    private $twig;

    public function __construct(Environment $twig){
        $this->twig = $twig;
    }

    public function index(): Response
    {
        return new Response($this->twig->render('pages/home.html.twig'));
    }
}