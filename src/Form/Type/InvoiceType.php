<?php
// src/Form/Type/InvoiceType.php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use App\Entity\Invoice;
use App\Entity\InvoiceField;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InvoiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', DateType::class)
            ->add('number', IntegerType::class)
            ->add('customerid', IntegerType::class)
            ->add('save', SubmitType::class)
           
        ;
    }

      public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Invoice::class,
        ]);
    }
}