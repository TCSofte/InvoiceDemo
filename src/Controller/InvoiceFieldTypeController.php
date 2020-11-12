<?php
// src/Controller/InvoiceFieldTypeController.php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use App\Form\Type\InvoiceType;
use App\Form\Type\InvoiceFieldType;
use App\Entity\InvoiceField;
use App\Entity\Invoice;
use Doctrine\ORM\EntityManagerInterface;



class InvoiceFieldTypeController extends AbstractController
{



    /**
     * @Route("/Invoice/FormInvoiceField/{id}")
     * @Method({"GET", "POST"})
     */
    public function new(Request $request,int $id)
    {

         // creates a task object and initializes some data for this example
         // 
         // 
       
 $Invoice = $this->getDoctrine()->getRepository(Invoice::class)->find($id);


      $InvoiceField = new InvoiceField();
        // ...

      $form = $this->createForm(InvoiceFieldType::class, $InvoiceField);

         $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // $form->getData() holds the submitted values
        // but, the original `$task` variable has also been updated
        $InvoiceField = $form->getData();

        // ... perform some action, such as saving the task to the database
        // for example, if Task is a Doctrine entity, save it!
        $entityManager = $this->getDoctrine()->getManager();

            $InvoiceField->setInvoiceid($Invoice);
        $entityManager->persist($InvoiceField);
         $entityManager->flush();

        return $this->redirectToRoute('InvoiceList');
    }

      

  return $this->render('InvoiceFieldForm.html.twig', [
           'id' => $id,
            'form' => $form->createView(),
        ]);

       

    }




   

}