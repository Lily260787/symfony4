<?php

/**
 * Created by PhpStorm.
 * User: jdaprato
 * Date: 09/11/18
 * Time: 13:26
 */

namespace App\Controller;

use App\Entity\Property;
use Doctrine\Common\Persistence\ObjectManager;
use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{
    private $repository;

    public function __construct(PropertyRepository $repository, ObjectManager $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }
    /**
     * @Route("/biens", name="property.index")
     * @return Response
     */
    public function index(): Response
    {

        $property = $this->repository->findAllVisible();
        $repo = $this->getDoctrine()->getRepository($property);
        dump($repo);
        return $this->render("property/index.html.twig", [
            'current_menu' => 'properties',
        ]);
    }

}
