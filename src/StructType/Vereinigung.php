<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Vereinigung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Vereinigung extends AbstractStructBase
{
    /**
     * The NameVereinigung
     */
    public ?string $NameVereinigung = null;

    /**
     * The NatuerlichePerson
     */
    public ?\THAG\XKfz\StructType\NatuerlichePerson $NatuerlichePerson = null;

    /**
     * The JuristischePerson
     */
    public ?\THAG\XKfz\StructType\JuristischePerson $JuristischePerson = null;

    /**
     * Constructor method for Vereinigung
     *
     * @uses Vereinigung::setNameVereinigung()
     * @uses Vereinigung::setNatuerlichePerson()
     * @uses Vereinigung::setJuristischePerson()
     */
    public function __construct(?string $nameVereinigung = null, ?\THAG\XKfz\StructType\NatuerlichePerson $natuerlichePerson = null, ?\THAG\XKfz\StructType\JuristischePerson $juristischePerson = null)
    {
        $this
            ->setNameVereinigung($nameVereinigung)
            ->setNatuerlichePerson($natuerlichePerson)
            ->setJuristischePerson($juristischePerson);
    }

    /**
     * Get NameVereinigung value
     */
    public function getNameVereinigung(): ?string
    {
        return $this->NameVereinigung;
    }

    /**
     * Set NameVereinigung value
     */
    public function setNameVereinigung(?string $nameVereinigung = null): self
    {
        $this->NameVereinigung = $nameVereinigung;

        return $this;
    }

    /**
     * Get NatuerlichePerson value
     */
    public function getNatuerlichePerson(): ?\THAG\XKfz\StructType\NatuerlichePerson
    {
        return $this->NatuerlichePerson;
    }

    /**
     * Set NatuerlichePerson value
     */
    public function setNatuerlichePerson(?\THAG\XKfz\StructType\NatuerlichePerson $natuerlichePerson = null): self
    {
        $this->NatuerlichePerson = $natuerlichePerson;

        return $this;
    }

    /**
     * Get JuristischePerson value
     */
    public function getJuristischePerson(): ?\THAG\XKfz\StructType\JuristischePerson
    {
        return $this->JuristischePerson;
    }

    /**
     * Set JuristischePerson value
     */
    public function setJuristischePerson(?\THAG\XKfz\StructType\JuristischePerson $juristischePerson = null): self
    {
        $this->JuristischePerson = $juristischePerson;

        return $this;
    }
}
