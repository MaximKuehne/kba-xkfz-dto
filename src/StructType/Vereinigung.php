<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Vereinigung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Vereinigung extends AbstractStructBase
{
    /**
     * The NameVereinigung
     * @var string|null
     */
    public ?string $NameVereinigung = null;
    /**
     * The NatuerlichePerson
     * @var \THAG\XKfz\StructType\NatuerlichePerson|null
     */
    public ?\THAG\XKfz\StructType\NatuerlichePerson $NatuerlichePerson = null;
    /**
     * The JuristischePerson
     * @var \THAG\XKfz\StructType\JuristischePerson|null
     */
    public ?\THAG\XKfz\StructType\JuristischePerson $JuristischePerson = null;
    /**
     * Constructor method for Vereinigung
     * @uses Vereinigung::setNameVereinigung()
     * @uses Vereinigung::setNatuerlichePerson()
     * @uses Vereinigung::setJuristischePerson()
     * @param string $nameVereinigung
     * @param \THAG\XKfz\StructType\NatuerlichePerson $natuerlichePerson
     * @param \THAG\XKfz\StructType\JuristischePerson $juristischePerson
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
     * @return string|null
     */
    public function getNameVereinigung(): ?string
    {
        return $this->NameVereinigung;
    }
    /**
     * Set NameVereinigung value
     * @param string $nameVereinigung
     * @return \THAG\XKfz\StructType\Vereinigung
     */
    public function setNameVereinigung(?string $nameVereinigung = null): self
    {
        $this->NameVereinigung = $nameVereinigung;
        
        return $this;
    }
    /**
     * Get NatuerlichePerson value
     * @return \THAG\XKfz\StructType\NatuerlichePerson|null
     */
    public function getNatuerlichePerson(): ?\THAG\XKfz\StructType\NatuerlichePerson
    {
        return $this->NatuerlichePerson;
    }
    /**
     * Set NatuerlichePerson value
     * @param \THAG\XKfz\StructType\NatuerlichePerson $natuerlichePerson
     * @return \THAG\XKfz\StructType\Vereinigung
     */
    public function setNatuerlichePerson(?\THAG\XKfz\StructType\NatuerlichePerson $natuerlichePerson = null): self
    {
        $this->NatuerlichePerson = $natuerlichePerson;
        
        return $this;
    }
    /**
     * Get JuristischePerson value
     * @return \THAG\XKfz\StructType\JuristischePerson|null
     */
    public function getJuristischePerson(): ?\THAG\XKfz\StructType\JuristischePerson
    {
        return $this->JuristischePerson;
    }
    /**
     * Set JuristischePerson value
     * @param \THAG\XKfz\StructType\JuristischePerson $juristischePerson
     * @return \THAG\XKfz\StructType\Vereinigung
     */
    public function setJuristischePerson(?\THAG\XKfz\StructType\JuristischePerson $juristischePerson = null): self
    {
        $this->JuristischePerson = $juristischePerson;
        
        return $this;
    }
}
