<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonAnfrageTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class PersonAnfrageTyp extends AbstractStructBase
{
    /**
     * The NatuerlichePerson
     */
    public ?\THAG\XKfz\StructType\NatuerlichePersonAnfrageTyp $NatuerlichePerson = null;

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
     * Constructor method for PersonAnfrageTyp
     *
     * @uses PersonAnfrageTyp::setNatuerlichePerson()
     * @uses PersonAnfrageTyp::setNameJuristischePerson()
     * @uses PersonAnfrageTyp::setNameVereinigung()
     * @uses PersonAnfrageTyp::setPostleitzahl()
     * @uses PersonAnfrageTyp::setWohnort()
     * @uses PersonAnfrageTyp::setExakteSuche()
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
     */
    public function getNatuerlichePerson(): ?\THAG\XKfz\StructType\NatuerlichePersonAnfrageTyp
    {
        return $this->NatuerlichePerson;
    }

    /**
     * Set NatuerlichePerson value
     */
    public function setNatuerlichePerson(?\THAG\XKfz\StructType\NatuerlichePersonAnfrageTyp $natuerlichePerson = null): self
    {
        $this->NatuerlichePerson = $natuerlichePerson;

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
