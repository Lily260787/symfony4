    <?php

    /**
     * Created by PhpStorm.
     * User: jdaprato
     * Date: 09/11/18
     * Time: 13:26
     */

namespace App\Controller;
             

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Property;

        class PropertyController extends AbstractController
        {
            /**
             * @Route("/biens", name="property.index")
             * @return Response
             */
            public function index(): Response {
                $property = new Property();
                $property
                ->setTitle('Mon premier bien')
                ->setPrice(200000)
                ->setRooms(3)
                ->setBedrooms(2)
                ->setDescription('Appartement 3 pièces calme et lumineux...')
                ->setSurface(60)
                ->setFloor(4)
                ->setHeat(1)
                ->setCity('Montpellier')
                ->setAddress('26 Boulevard Gambetta')
                ->setPostalCode('34000');
                $em = $this->getDoctrine()->getManager();
                $em->persist(property);
                $em->flush();
                return $this->render("property/index.html.twig", [
                    'current_menu' => 'properties'
                ]);
        }

    }