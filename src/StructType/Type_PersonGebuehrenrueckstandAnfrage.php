<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.PersonGebuehrenrueckstandAnfrage StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_PersonGebuehrenrueckstandAnfrage extends AbstractStructBase
{
    /**
     * The natuerlichePerson
     */
    public ?\THAG\XKfz\StructType\Type_NatuerlichePersonGebuehrenrueckstandAnfrage $natuerlichePerson = null;

    /**
     * The natuerlichePersonHKR
     */
    public ?\THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson $natuerlichePersonHKR = null;

    /**
     * The NameJuristischePerson
     */
    public ?string $NameJuristischePerson = null;

    /**
     * The Postleitzahl
     */
    public ?string $Postleitzahl = null;

    /**
     * The Strasse
     */
    public ?string $Strasse = null;

    /**
     * Constructor method for Type.PersonGebuehrenrueckstandAnfrage
     *
     * @uses Type_PersonGebuehrenrueckstandAnfrage::setNatuerlichePerson()
     * @uses Type_PersonGebuehrenrueckstandAnfrage::setNatuerlichePersonHKR()
     * @uses Type_PersonGebuehrenrueckstandAnfrage::setNameJuristischePerson()
     * @uses Type_PersonGebuehrenrueckstandAnfrage::setPostleitzahl()
     * @uses Type_PersonGebuehrenrueckstandAnfrage::setStrasse()
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
     */
    public function getNatuerlichePerson(): ?\THAG\XKfz\StructType\Type_NatuerlichePersonGebuehrenrueckstandAnfrage
    {
        return $this->natuerlichePerson;
    }

    /**
     * Set natuerlichePerson value
     */
    public function setNatuerlichePerson(?\THAG\XKfz\StructType\Type_NatuerlichePersonGebuehrenrueckstandAnfrage $natuerlichePerson = null): self
    {
        $this->natuerlichePerson = $natuerlichePerson;

        return $this;
    }

    /**
     * Get natuerlichePersonHKR value
     */
    public function getNatuerlichePersonHKR(): ?\THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson
    {
        return $this->natuerlichePersonHKR;
    }

    /**
     * Set natuerlichePersonHKR value
     */
    public function setNatuerlichePersonHKR(?\THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson $natuerlichePersonHKR = null): self
    {
        $this->natuerlichePersonHKR = $natuerlichePersonHKR;

        return $this;
    }

    /**
     * Get NameJuristischePerson value
     */
    public function getNameJuristischePerson(): ?string
    {
        return $this->NameJuristischePerson;
    }

    /**
     * Set NameJuristischePerson value
     */
    public function setNameJuristischePerson(?string $nameJuristischePerson = null): self
    {
        $this->NameJuristischePerson = $nameJuristischePerson;

        return $this;
    }

    /**
     * Get Postleitzahl value
     */
    public function getPostleitzahl(): ?string
    {
        return $this->Postleitzahl;
    }

    /**
     * Set Postleitzahl value
     */
    public function setPostleitzahl(?string $postleitzahl = null): self
    {
        $this->Postleitzahl = $postleitzahl;

        return $this;
    }

    /**
     * Get Strasse value
     */
    public function getStrasse(): ?string
    {
        return $this->Strasse;
    }

    /**
     * Set Strasse value
     */
    public function setStrasse(?string $strasse = null): self
    {
        $this->Strasse = $strasse;

        return $this;
    }
}
