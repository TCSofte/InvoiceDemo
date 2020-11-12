<?php
// src/AppBundle/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Entity\Invoice;
use Doctrine\ORM\EntityManagerInterface;


class LuckyController extends Controller
{
     /**
     * @Route("/lucky/number")
     */
    public function numberAction()
    {

// you can fetch the EntityManager via $this->getDoctrine()
    // or you can add an argument to your action: createAction(EntityManagerInterface $entityManager)
 

    $entityManager = $this->getDoctrine()->getManager();

    $invoice = new invoice();
    $invoice->setNumber(22);
   $invoice->setCustomerid(11);
   
    $invoice->setDate(new \DateTime());

    // tells Doctrine you want to (eventually) save the Product (no queries yet)
    $entityManager->persist($invoice);

    // actually executes the queries (i.e. the INSERT query)
    $entityManager->flush();


        $number = random_int(0, 100);

        return $this->render('number.html.twig', [
            'number' => $number,
        ]);
    }

  


}