<?php
// src/Controller/InvoiceDetailsController.php
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



class InvoiceDetailsController extends AbstractController
{



    /**
     * @Route("/Invoice/InvoiceDetails/{id}")
     * 
     */
  
          public function InvoiceDe(int $id)
    {


         // creates a task object and initializes some data for this example
         // 
         // 
       
 $Invoice = $this->getDoctrine()->getRepository(Invoice::class)->find($id);


 
  

 
  return $this->render('InvoiceDetails.html.twig', [
           'invoice' => $Invoice,
            'invoicedet' => $Invoice->getInvoiceFields(),
        ]);

        }

    }