<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AnfrageGebuehrenrueckstand StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AnfrageGebuehrenrueckstand extends AbstractStructBase
{
    /**
     * The natuerlichePerson
     */
    public ?\THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson $natuerlichePerson = null;

    /**
     * The NameJuristischePerson
     */
    public ?string $NameJuristischePerson = null;

    /**
     * The NameVereinigung
     */
    public ?string $NameVereinigung = null;

    /**
     * The Postleitzahl
     */
    public ?string $Postleitzahl = null;

    /**
     * The Wohnort
     */
    public ?string $Wohnort = null;

    /**
     * The ExakteSuche
     */
    public ?bool $ExakteSuche = null;

    /**
     * Constructor method for Type.AnfrageGebuehrenrueckstand
     *
     * @uses Type_AnfrageGebuehrenrueckstand::setNatuerlichePerson()
     * @uses Type_AnfrageGebuehrenrueckstand::setNameJuristischePerson()
     * @uses Type_AnfrageGebuehrenrueckstand::setNameVereinigung()
     * @uses Type_AnfrageGebuehrenrueckstand::setPostleitzahl()
     * @uses Type_AnfrageGebuehrenrueckstand::setWohnort()
     * @uses Type_AnfrageGebuehrenrueckstand::setExakteSuche()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson $natuerlichePerson = null, ?string $nameJuristischePerson = null, ?string $nameVereinigung = null, ?string $postleitzahl = null, ?string $wohnort = null, ?bool $exakteSuche = null)
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
     * Get natuerlichePerson value
     */
    public function getNatuerlichePerson(): ?\THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson
    {
        return $this->natuerlichePerson;
    }

    /**
     * Set natuerlichePerson value
     */
    public function setNatuerlichePerson(?\THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson $natuerlichePerson = null): self
    {
        $this->natuerlichePerson = $natuerlichePerson;

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
     * Get Wohnort value
     */
    public function getWohnort(): ?string
    {
        return $this->Wohnort;
    }

    /**
     * Set Wohnort value
     */
    public function setWohnort(?string $wohnort = null): self
    {
        $this->Wohnort = $wohnort;

        return $this;
    }

    /**
     * Get ExakteSuche value
     */
    public function getExakteSuche(): ?bool
    {
        return $this->ExakteSuche;
    }

    /**
     * Set ExakteSuche value
     */
    public function setExakteSuche(?bool $exakteSuche = null): self
    {
        $this->ExakteSuche = $exakteSuche;

        return $this;
    }
}
