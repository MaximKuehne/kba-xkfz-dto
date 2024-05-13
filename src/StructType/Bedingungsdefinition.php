<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Bedingungsdefinition StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Bedingungsdefinition extends AbstractStructBase
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
     * The ListeFeldbezeichnung
     */
    public ?\THAG\XKfz\StructType\ListeFeldbezeichnung $ListeFeldbezeichnung = null;

    /**
     * Constructor method for Bedingungsdefinition
     *
     * @uses Bedingungsdefinition::setBedingung()
     * @uses Bedingungsdefinition::setBedingungsbeschreibung()
     * @uses Bedingungsdefinition::setListeFeldbezeichnung()
     */
    public function __construct(?string $bedingung = null, ?string $bedingungsbeschreibung = null, ?\THAG\XKfz\StructType\ListeFeldbezeichnung $listeFeldbezeichnung = null)
    {
        $this
            ->setBedingung($bedingung)
            ->setBedingungsbeschreibung($bedingungsbeschreibung)
            ->setListeFeldbezeichnung($listeFeldbezeichnung);
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
     * Get ListeFeldbezeichnung value
     */
    public function getListeFeldbezeichnung(): ?\THAG\XKfz\StructType\ListeFeldbezeichnung
    {
        return $this->ListeFeldbezeichnung;
    }

    /**
     * Set ListeFeldbezeichnung value
     */
    public function setListeFeldbezeichnung(?\THAG\XKfz\StructType\ListeFeldbezeichnung $listeFeldbezeichnung = null): self
    {
        $this->ListeFeldbezeichnung = $listeFeldbezeichnung;

        return $this;
    }
}
