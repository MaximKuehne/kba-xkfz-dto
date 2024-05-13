<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BekannteBedingungsverletzung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class BekannteBedingungsverletzung extends AbstractStructBase
{
    /**
     * The Bedingung
     */
    public ?string $Bedingung = null;

    /**
     * The Bedingungsbeschreibung
     */
    public ?string $Bedingungsbeschreibung = null;

    /**
     * The ListeFelddefinition
     */
    public ?\THAG\XKfz\StructType\ListeFelddefinition $ListeFelddefinition = null;

    /**
     * Constructor method for BekannteBedingungsverletzung
     *
     * @uses BekannteBedingungsverletzung::setBedingung()
     * @uses BekannteBedingungsverletzung::setBedingungsbeschreibung()
     * @uses BekannteBedingungsverletzung::setListeFelddefinition()
     */
    public function __construct(?string $bedingung = null, ?string $bedingungsbeschreibung = null, ?\THAG\XKfz\StructType\ListeFelddefinition $listeFelddefinition = null)
    {
        $this
            ->setBedingung($bedingung)
            ->setBedingungsbeschreibung($bedingungsbeschreibung)
            ->setListeFelddefinition($listeFelddefinition);
    }

    /**
     * Get Bedingung value
     */
    public function getBedingung(): ?string
    {
        return $this->Bedingung;
    }

    /**
     * Set Bedingung value
     */
    public function setBedingung(?string $bedingung = null): self
    {
        $this->Bedingung = $bedingung;

        return $this;
    }

    /**
     * Get Bedingungsbeschreibung value
     */
    public function getBedingungsbeschreibung(): ?string
    {
        return $this->Bedingungsbeschreibung;
    }

    /**
     * Set Bedingungsbeschreibung value
     */
    public function setBedingungsbeschreibung(?string $bedingungsbeschreibung = null): self
    {
        $this->Bedingungsbeschreibung = $bedingungsbeschreibung;

        return $this;
    }

    /**
     * Get ListeFelddefinition value
     */
    public function getListeFelddefinition(): ?\THAG\XKfz\StructType\ListeFelddefinition
    {
        return $this->ListeFelddefinition;
    }

    /**
     * Set ListeFelddefinition value
     */
    public function setListeFelddefinition(?\THAG\XKfz\StructType\ListeFelddefinition $listeFelddefinition = null): self
    {
        $this->ListeFelddefinition = $listeFelddefinition;

        return $this;
    }
}
