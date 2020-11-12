<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvoiceField
 *
 * @ORM\Table(name="invoice_field", indexes={@ORM\Index(name="InvoiceId", columns={"InvoiceId"})})
 * @ORM\Entity
 */
class InvoiceField
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
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=1000, nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="Quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="Amount", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="VatAmount", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $vatamount;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalVat", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $totalvat;

    /**
     * @var \Invoice
     *
     * @ORM\ManyToOne(targetEntity="Invoice", inversedBy="InvoiceFields")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="InvoiceId", referencedColumnName="Id")
     * })
     */
    private $invoiceid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getVatamount(): ?string
    {
        return $this->vatamount;
    }

    public function setVatamount(string $vatamount): self
    {
        $this->vatamount = $vatamount;

        return $this;
    }

    public function getTotalvat(): ?string
    {
        return $this->totalvat;
    }

    public function setTotalvat(string $totalvat): self
    {
        $this->totalvat = $totalvat;

        return $this;
    }

    public function getInvoiceid(): ?Invoice
    {
        return $this->invoiceid;
    }

    public function setInvoiceid(?Invoice $invoiceid): self
    {
        $this->invoiceid = $invoiceid;

        return $this;
    }


}
