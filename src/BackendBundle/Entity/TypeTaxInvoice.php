<?php

namespace BackendBundle\Entity;

/**
 * TypeTaxInvoice
 */
class TypeTaxInvoice
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $taxLevel;

    /**
     * @var float
     */
    private $percent;

    /**
     * @var \DateTime
     */
    private $registrationDate;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set taxLevel
     *
     * @param string $taxLevel
     *
     * @return TypeTaxInvoice
     */
    public function setTaxLevel($taxLevel)
    {
        $this->taxLevel = $taxLevel;

        return $this;
    }

    /**
     * Get taxLevel
     *
     * @return string
     */
    public function getTaxLevel()
    {
        return $this->taxLevel;
    }

    /**
     * Set percent
     *
     * @param float $percent
     *
     * @return TypeTaxInvoice
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * Get percent
     *
     * @return float
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Set registrationDate
     *
     * @param \DateTime $registrationDate
     *
     * @return TypeTaxInvoice
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

    /**
     * Get registrationDate
     *
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }
}

