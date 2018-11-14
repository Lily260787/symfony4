<?php

/**
 * Created by PhpStorm.
 * User: jdaprato
 * Date: 09/11/18
 * Time: 13:26
 */

namespace App\Controller;

use App\Entity\Property;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{
    /**
     * @Route("/biens", name="property.index")
     * @return Response
     */
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Property::class);
        dump($repo);
        return $this->render("property/index.html.twig", [
            'current_menu' => 'properties',
        ]);
    }

}
