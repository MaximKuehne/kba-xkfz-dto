<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Rechteklasse StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Rechteklasse extends AbstractStructBase
{
    /**
     * The Rechteklassennummer
     */
    public ?string $Rechteklassennummer = null;

    /**
     * The Rechteklassenname
     */
    public ?string $Rechteklassenname = null;

    /**
     * The Beschreibung
     */
    public ?string $Beschreibung = null;

    /**
     * Constructor method for Rechteklasse
     *
     * @uses Rechteklasse::setRechteklassennummer()
     * @uses Rechteklasse::setRechteklassenname()
     * @uses Rechteklasse::setBeschreibung()
     */
    public function __construct(?string $rechteklassennummer = null, ?string $rechteklassenname = null, ?string $beschreibung = null)
    {
        $this
            ->setRechteklassennummer($rechteklassennummer)
            ->setRechteklassenname($rechteklassenname)
            ->setBeschreibung($beschreibung);
    }

    /**
     * Get Rechteklassennummer value
     */
    public function getRechteklassennummer(): ?string
    {
        return $this->Rechteklassennummer;
    }

    /**
     * Set Rechteklassennummer value
     */
    public function setRechteklassennummer(?string $rechteklassennummer = null): self
    {
        $this->Rechteklassennummer = $rechteklassennummer;

        return $this;
    }

    /**
     * Get Rechteklassenname value
     */
    public function getRechteklassenname(): ?string
    {
        return $this->Rechteklassenname;
    }

    /**
     * Set Rechteklassenname value
     */
    public function setRechteklassenname(?string $rechteklassenname = null): self
    {
        $this->Rechteklassenname = $rechteklassenname;

        return $this;
    }

    /**
     * Get Beschreibung value
     */
    public function getBeschreibung(): ?string
    {
        return $this->Beschreibung;
    }

    /**
     * Set Beschreibung value
     */
    public function setBeschreibung(?string $beschreibung = null): self
    {
        $this->Beschreibung = $beschreibung;

        return $this;
    }
}
