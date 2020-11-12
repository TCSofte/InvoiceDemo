<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Invoice
 *
 * @ORM\Table(name="invoice")
 * @ORM\Entity
 */
class Invoice
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="Number", type="integer", nullable=false)
     */
    private $number;

    /**
     * @var int
     *
     * @ORM\Column(name="CustomerId", type="integer", nullable=false)
     */
    private $customerid;



/**
     * @ORM\OneToMany(targetEntity="App\Entity\InvoiceField", mappedBy="invoiceid")
     */
    private $InvoiceFields;

    public function __construct()
    {
        $this->InvoiceFields = new ArrayCollection();
    }

    /**
     * @return Collection|InvoiceField[]
     */
    public function getInvoiceFields(): Collection
    {
        return $this->InvoiceFields;
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(int $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getCustomerid(): ?int
    {
        return $this->customerid;
    }

    public function setCustomerid(int $customerid): self
    {
        $this->customerid = $customerid;

        return $this;
    }


}
