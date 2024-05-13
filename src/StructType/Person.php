<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Person extends AbstractStructBase
{
    /**
     * The NatuerlichePerson
     */
    public ?\THAG\XKfz\StructType\NatuerlichePerson $NatuerlichePerson = null;

    /**
     * The JuristischePerson
     */
    public ?\THAG\XKfz\StructType\JuristischePerson $JuristischePerson = null;

    /**
     * The Vereinigung
     */
    public ?\THAG\XKfz\StructType\Vereinigung $Vereinigung = null;

    /**
     * Constructor method for Person
     *
     * @uses Person::setNatuerlichePerson()
     * @uses Person::setJuristischePerson()
     * @uses Person::setVereinigung()
     */
    public function __construct(?\THAG\XKfz\StructType\NatuerlichePerson $natuerlichePerson = null, ?\THAG\XKfz\StructType\JuristischePerson $juristischePerson = null, ?\THAG\XKfz\StructType\Vereinigung $vereinigung = null)
    {
        $this
            ->setNatuerlichePerson($natuerlichePerson)
            ->setJuristischePerson($juristischePerson)
            ->setVereinigung($vereinigung);
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

    /**
     * Get Vereinigung value
     */
    public function getVereinigung(): ?\THAG\XKfz\StructType\Vereinigung
    {
        return $this->Vereinigung;
    }

    /**
     * Set Vereinigung value
     */
    public function setVereinigung(?\THAG\XKfz\StructType\Vereinigung $vereinigung = null): self
    {
        $this->Vereinigung = $vereinigung;

        return $this;
    }
}
