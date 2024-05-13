<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.PersonGebuehrenrueckstandAnfrage StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_PersonGebuehrenrueckstandAnfrage extends AbstractStructBase
{
    /**
     * The natuerlichePerson
     * @var \THAG\XKfz\StructType\Type_NatuerlichePersonGebuehrenrueckstandAnfrage|null
     */
    public ?\THAG\XKfz\StructType\Type_NatuerlichePersonGebuehrenrueckstandAnfrage $natuerlichePerson = null;
    /**
     * The natuerlichePersonHKR
     * @var \THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson|null
     */
    public ?\THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson $natuerlichePersonHKR = null;
    /**
     * The NameJuristischePerson
     * @var string|null
     */
    public ?string $NameJuristischePerson = null;
    /**
     * The Postleitzahl
     * @var string|null
     */
    public ?string $Postleitzahl = null;
    /**
     * The Strasse
     * @var string|null
     */
    public ?string $Strasse = null;
    /**
     * Constructor method for Type.PersonGebuehrenrueckstandAnfrage
     * @uses Type_PersonGebuehrenrueckstandAnfrage::setNatuerlichePerson()
     * @uses Type_PersonGebuehrenrueckstandAnfrage::setNatuerlichePersonHKR()
     * @uses Type_PersonGebuehrenrueckstandAnfrage::setNameJuristischePerson()
     * @uses Type_PersonGebuehrenrueckstandAnfrage::setPostleitzahl()
     * @uses Type_PersonGebuehrenrueckstandAnfrage::setStrasse()
     * @param \THAG\XKfz\StructType\Type_NatuerlichePersonGebuehrenrueckstandAnfrage $natuerlichePerson
     * @param \THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson $natuerlichePersonHKR
     * @param string $nameJuristischePerson
     * @param string $postleitzahl
     * @param string $strasse
     */
    public function __construct(?\THAG\XKfz\StructType\Type_NatuerlichePersonGebuehrenrueckstandAnfrage $natuerlichePerson = null, ?\THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson $natuerlichePersonHKR = null, ?string $nameJuristischePerson = null, ?string $postleitzahl = null, ?string $strasse = null)
    {
        $this
            ->setNatuerlichePerson($natuerlichePerson)
            ->setNatuerlichePersonHKR($natuerlichePersonHKR)
            ->setNameJuristischePerson($nameJuristischePerson)
            ->setPostleitzahl($postleitzahl)
            ->setStrasse($strasse);
    }
    /**
     * Get natuerlichePerson value
     * @return \THAG\XKfz\StructType\Type_NatuerlichePersonGebuehrenrueckstandAnfrage|null
     */
    public function getNatuerlichePerson(): ?\THAG\XKfz\StructType\Type_NatuerlichePersonGebuehrenrueckstandAnfrage
    {
        return $this->natuerlichePerson;
    }
    /**
     * Set natuerlichePerson value
     * @param \THAG\XKfz\StructType\Type_NatuerlichePersonGebuehrenrueckstandAnfrage $natuerlichePerson
     * @return \THAG\XKfz\StructType\Type_PersonGebuehrenrueckstandAnfrage
     */
    public function setNatuerlichePerson(?\THAG\XKfz\StructType\Type_NatuerlichePersonGebuehrenrueckstandAnfrage $natuerlichePerson = null): self
    {
        $this->natuerlichePerson = $natuerlichePerson;
        
        return $this;
    }
    /**
     * Get natuerlichePersonHKR value
     * @return \THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson|null
     */
    public function getNatuerlichePersonHKR(): ?\THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson
    {
        return $this->natuerlichePersonHKR;
    }
    /**
     * Set natuerlichePersonHKR value
     * @param \THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson $natuerlichePersonHKR
     * @return \THAG\XKfz\StructType\Type_PersonGebuehrenrueckstandAnfrage
     */
    public function setNatuerlichePersonHKR(?\THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson $natuerlichePersonHKR = null): self
    {
        $this->natuerlichePersonHKR = $natuerlichePersonHKR;
        
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
     * @return \THAG\XKfz\StructType\Type_PersonGebuehrenrueckstandAnfrage
     */
    public function setNameJuristischePerson(?string $nameJuristischePerson = null): self
    {
        $this->NameJuristischePerson = $nameJuristischePerson;
        
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
     * @return \THAG\XKfz\StructType\Type_PersonGebuehrenrueckstandAnfrage
     */
    public function setPostleitzahl(?string $postleitzahl = null): self
    {
        $this->Postleitzahl = $postleitzahl;
        
        return $this;
    }
    /**
     * Get Strasse value
     * @return string|null
     */
    public function getStrasse(): ?string
    {
        return $this->Strasse;
    }
    /**
     * Set Strasse value
     * @param string $strasse
     * @return \THAG\XKfz\StructType\Type_PersonGebuehrenrueckstandAnfrage
     */
    public function setStrasse(?string $strasse = null): self
    {
        $this->Strasse = $strasse;
        
        return $this;
    }
}
