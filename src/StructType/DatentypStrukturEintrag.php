<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatentypStrukturEintrag StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DatentypStrukturEintrag extends AbstractStructBase
{
    /**
     * The Datenkey
     */
    public ?string $Datenkey = null;

    /**
     * The Datenbedingung
     */
    public ?string $Datenbedingung = null;

    /**
     * The DatentypName
     */
    public ?string $DatentypName = null;

    /**
     * The DateneintragOptional
     */
    public ?string $DateneintragOptional = null;

    /**
     * The DateneintragName
     */
    public ?string $DateneintragName = null;

    /**
     * The DateneintragBeschreibung
     */
    public ?string $DateneintragBeschreibung = null;

    /**
     * Constructor method for DatentypStrukturEintrag
     *
     * @uses DatentypStrukturEintrag::setDatenkey()
     * @uses DatentypStrukturEintrag::setDatenbedingung()
     * @uses DatentypStrukturEintrag::setDatentypName()
     * @uses DatentypStrukturEintrag::setDateneintragOptional()
     * @uses DatentypStrukturEintrag::setDateneintragName()
     * @uses DatentypStrukturEintrag::setDateneintragBeschreibung()
     */
    public function __construct(?string $datenkey = null, ?string $datenbedingung = null, ?string $datentypName = null, ?string $dateneintragOptional = null, ?string $dateneintragName = null, ?string $dateneintragBeschreibung = null)
    {
        $this
            ->setDatenkey($datenkey)
            ->setDatenbedingung($datenbedingung)
            ->setDatentypName($datentypName)
            ->setDateneintragOptional($dateneintragOptional)
            ->setDateneintragName($dateneintragName)
            ->setDateneintragBeschreibung($dateneintragBeschreibung);
    }

    /**
     * Get Datenkey value
     */
    public function getDatenkey(): ?string
    {
        return $this->Datenkey;
    }

    /**
     * Set Datenkey value
     */
    public function setDatenkey(?string $datenkey = null): self
    {
        $this->Datenkey = $datenkey;

        return $this;
    }

    /**
     * Get Datenbedingung value
     */
    public function getDatenbedingung(): ?string
    {
        return $this->Datenbedingung;
    }

    /**
     * Set Datenbedingung value
     */
    public function setDatenbedingung(?string $datenbedingung = null): self
    {
        $this->Datenbedingung = $datenbedingung;

        return $this;
    }

    /**
     * Get DatentypName value
     */
    public function getDatentypName(): ?string
    {
        return $this->DatentypName;
    }

    /**
     * Set DatentypName value
     */
    public function setDatentypName(?string $datentypName = null): self
    {
        $this->DatentypName = $datentypName;

        return $this;
    }

    /**
     * Get DateneintragOptional value
     */
    public function getDateneintragOptional(): ?string
    {
        return $this->DateneintragOptional;
    }

    /**
     * Set DateneintragOptional value
     */
    public function setDateneintragOptional(?string $dateneintragOptional = null): self
    {
        $this->DateneintragOptional = $dateneintragOptional;

        return $this;
    }

    /**
     * Get DateneintragName value
     */
    public function getDateneintragName(): ?string
    {
        return $this->DateneintragName;
    }

    /**
     * Set DateneintragName value
     */
    public function setDateneintragName(?string $dateneintragName = null): self
    {
        $this->DateneintragName = $dateneintragName;

        return $this;
    }

    /**
     * Get DateneintragBeschreibung value
     */
    public function getDateneintragBeschreibung(): ?string
    {
        return $this->DateneintragBeschreibung;
    }

    /**
     * Set DateneintragBeschreibung value
     */
    public function setDateneintragBeschreibung(?string $dateneintragBeschreibung = null): self
    {
        $this->DateneintragBeschreibung = $dateneintragBeschreibung;

        return $this;
    }
}
