<?php
// src/Controller/InvoiceTypeController.php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Form\Type\InvoiceType;
use App\Form\Type\InvoiceFieldType;
use App\Entity\InvoiceField;
use App\Entity\Invoice;
use Doctrine\ORM\EntityManagerInterface;



class InvoiceTypeController extends AbstractController
{



    /**
     * @Route("/Invoice/FormInvoice" , name="FormInvoice")
     */
    public function new(Request $request)
    {

         // creates a task object and initializes some data for this example
      $invoice = new Invoice();
        // ...

        $form = $this->createForm(InvoiceType::class, $invoice);

         $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        // $form->getData() holds the submitted values
        // but, the original `$task` variable has also been updated
        $invoice = $form->getData();

        // ... perform some action, such as saving the task to the database
        // for example, if Task is a Doctrine entity, save it!
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($invoice);
         $entityManager->flush();
  return $this->redirectToRoute('InvoiceList');
         
    }

        return $this->render('InvoiceForm.html.twig', [
            'form' => $form->createView(),
        ]);


       

    }
}