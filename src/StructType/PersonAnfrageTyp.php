<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonAnfrageTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class PersonAnfrageTyp extends AbstractStructBase
{
    /**
     * The NatuerlichePerson
     * @var \THAG\XKfz\StructType\NatuerlichePersonAnfrageTyp|null
     */
    public ?\THAG\XKfz\StructType\NatuerlichePersonAnfrageTyp $NatuerlichePerson = null;
    /**
     * The NameJuristischePerson
     * @var string|null
     */
    public ?string $NameJuristischePerson = null;
    /**
     * The NameVereinigung
     * @var string|null
     */
    public ?string $NameVereinigung = null;
    /**
     * The Postleitzahl
     * @var string|null
     */
    public ?string $Postleitzahl = null;
    /**
     * The Wohnort
     * @var string|null
     */
    public ?string $Wohnort = null;
    /**
     * The ExakteSuche
     * @var bool|null
     */
    public ?bool $ExakteSuche = null;
    /**
     * Constructor method for PersonAnfrageTyp
     * @uses PersonAnfrageTyp::setNatuerlichePerson()
     * @uses PersonAnfrageTyp::setNameJuristischePerson()
     * @uses PersonAnfrageTyp::setNameVereinigung()
     * @uses PersonAnfrageTyp::setPostleitzahl()
     * @uses PersonAnfrageTyp::setWohnort()
     * @uses PersonAnfrageTyp::setExakteSuche()
     * @param \THAG\XKfz\StructType\NatuerlichePersonAnfrageTyp $natuerlichePerson
     * @param string $nameJuristischePerson
     * @param string $nameVereinigung
     * @param string $postleitzahl
     * @param string $wohnort
     * @param bool $exakteSuche
     */
    public function __construct(?\THAG\XKfz\StructType\NatuerlichePersonAnfrageTyp $natuerlichePerson = null, ?string $nameJuristischePerson = null, ?string $nameVereinigung = null, ?string $postleitzahl = null, ?string $wohnort = null, ?bool $exakteSuche = null)
    {
        $this
            ->setNatuerlichePerson($natuerlichePerson)
            ->setNameJuristischePerson($nameJuristischePerson)
            ->setNameVereinigung($nameVereinigung)
            ->setPostleitzahl($postleitzahl)
            ->setWohnort($wohnort)
            ->setExakteSuche($exakteSuche);
    }
    /**
     * Get NatuerlichePerson value
     * @return \THAG\XKfz\StructType\NatuerlichePersonAnfrageTyp|null
     */
    public function getNatuerlichePerson(): ?\THAG\XKfz\StructType\NatuerlichePersonAnfrageTyp
    {
        return $this->NatuerlichePerson;
    }
    /**
     * Set NatuerlichePerson value
     * @param \THAG\XKfz\StructType\NatuerlichePersonAnfrageTyp $natuerlichePerson
     * @return \THAG\XKfz\StructType\PersonAnfrageTyp
     */
    public function setNatuerlichePerson(?\THAG\XKfz\StructType\NatuerlichePersonAnfrageTyp $natuerlichePerson = null): self
    {
        $this->NatuerlichePerson = $natuerlichePerson;
        
        return $this;
    }
    /**
     * Get NameJuristischePerson value
     * @return string|null
     */
    public function getNameJuristischePerson(): ?string
    {
        return $this->NameJuristischePerson;
    }
    /**
     * Set NameJuristischePerson value
     * @param string $nameJuristischePerson
     * @return \THAG\XKfz\StructType\PersonAnfrageTyp
     */
    public function setNameJuristischePerson(?string $nameJuristischePerson = null): self
    {
        $this->NameJuristischePerson = $nameJuristischePerson;
        
        return $this;
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
     * @return \THAG\XKfz\StructType\PersonAnfrageTyp
     */
    public function setNameVereinigung(?string $nameVereinigung = null): self
    {
        $this->NameVereinigung = $nameVereinigung;
        
        return $this;
    }
    /**
     * Get Postleitzahl value
     * @return string|null
     */
    public function getPostleitzahl(): ?string
    {
        return $this->Postleitzahl;
    }
    /**
     * Set Postleitzahl value
     * @param string $postleitzahl
     * @return \THAG\XKfz\StructType\PersonAnfrageTyp
     */
    public function setPostleitzahl(?string $postleitzahl = null): self
    {
        $this->Postleitzahl = $postleitzahl;
        
        return $this;
    }
    /**
     * Get Wohnort value
     * @return string|null
     */
    public function getWohnort(): ?string
    {
        return $this->Wohnort;
    }
    /**
     * Set Wohnort value
     * @param string $wohnort
     * @return \THAG\XKfz\StructType\PersonAnfrageTyp
     */
    public function setWohnort(?string $wohnort = null): self
    {
        $this->Wohnort = $wohnort;
        
        return $this;
    }
    /**
     * Get ExakteSuche value
     * @return bool|null
     */
    public function getExakteSuche(): ?bool
    {
        return $this->ExakteSuche;
    }
    /**
     * Set ExakteSuche value
     * @param bool $exakteSuche
     * @return \THAG\XKfz\StructType\PersonAnfrageTyp
     */
    public function setExakteSuche(?bool $exakteSuche = null): self
    {
        $this->ExakteSuche = $exakteSuche;
        
        return $this;
    }
}
