<?php
// src/Controller/InvoiceListController.php
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



class InvoiceListController extends AbstractController
{



    /**
     * @Route("/Invoice/InvoiceList", name="InvoiceList")
     */
    public function InvoiceList()
    {

    
    $invoice =  $this->getDoctrine()->getRepository(Invoice::class)->findAll();



   return $this->render('InvoiceList.html.twig', array('invoices' => $invoice));
       

    }
} 