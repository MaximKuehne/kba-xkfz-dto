<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Recht StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Recht extends AbstractStructBase
{
    /**
     * The Rechteklassennummer
     */
    public ?string $Rechteklassennummer = null;

    /**
     * The Rechtnummer
     */
    public ?string $Rechtnummer = null;

    /**
     * The Rechtname
     */
    public ?string $Rechtname = null;

    /**
     * The Beschreibung
     */
    public ?string $Beschreibung = null;

    /**
     * The Rechteart
     */
    public ?string $Rechteart = null;

    /**
     * The Funktionsrechtnummer
     */
    public ?string $Funktionsrechtnummer = null;

    /**
     * The Kommunikationspartnertyp
     */
    public ?string $Kommunikationspartnertyp = null;

    /**
     * The Minimalwert
     */
    public ?string $Minimalwert = null;

    /**
     * The Maximalwert
     */
    public ?string $Maximalwert = null;

    /**
     * Constructor method for Recht
     *
     * @uses Recht::setRechteklassennummer()
     * @uses Recht::setRechtnummer()
     * @uses Recht::setRechtname()
     * @uses Recht::setBeschreibung()
     * @uses Recht::setRechteart()
     * @uses Recht::setFunktionsrechtnummer()
     * @uses Recht::setKommunikationspartnertyp()
     * @uses Recht::setMinimalwert()
     * @uses Recht::setMaximalwert()
     */
    public function __construct(?string $rechteklassennummer = null, ?string $rechtnummer = null, ?string $rechtname = null, ?string $beschreibung = null, ?string $rechteart = null, ?string $funktionsrechtnummer = null, ?string $kommunikationspartnertyp = null, ?string $minimalwert = null, ?string $maximalwert = null)
    {
        $this
            ->setRechteklassennummer($rechteklassennummer)
            ->setRechtnummer($rechtnummer)
            ->setRechtname($rechtname)
            ->setBeschreibung($beschreibung)
            ->setRechteart($rechteart)
            ->setFunktionsrechtnummer($funktionsrechtnummer)
            ->setKommunikationspartnertyp($kommunikationspartnertyp)
            ->setMinimalwert($minimalwert)
            ->setMaximalwert($maximalwert);
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
     * Get Rechtnummer value
     */
    public function getRechtnummer(): ?string
    {
        return $this->Rechtnummer;
    }

    /**
     * Set Rechtnummer value
     */
    public function setRechtnummer(?string $rechtnummer = null): self
    {
        $this->Rechtnummer = $rechtnummer;

        return $this;
    }

    /**
     * Get Rechtname value
     */
    public function getRechtname(): ?string
    {
        return $this->Rechtname;
    }

    /**
     * Set Rechtname value
     */
    public function setRechtname(?string $rechtname = null): self
    {
        $this->Rechtname = $rechtname;

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

    /**
     * Get Rechteart value
     */
    public function getRechteart(): ?string
    {
        return $this->Rechteart;
    }

    /**
     * Set Rechteart value
     */
    public function setRechteart(?string $rechteart = null): self
    {
        $this->Rechteart = $rechteart;

        return $this;
    }

    /**
     * Get Funktionsrechtnummer value
     */
    public function getFunktionsrechtnummer(): ?string
    {
        return $this->Funktionsrechtnummer;
    }

    /**
     * Set Funktionsrechtnummer value
     */
    public function setFunktionsrechtnummer(?string $funktionsrechtnummer = null): self
    {
        $this->Funktionsrechtnummer = $funktionsrechtnummer;

        return $this;
    }

    /**
     * Get Kommunikationspartnertyp value
     */
    public function getKommunikationspartnertyp(): ?string
    {
        return $this->Kommunikationspartnertyp;
    }

    /**
     * Set Kommunikationspartnertyp value
     */
    public function setKommunikationspartnertyp(?string $kommunikationspartnertyp = null): self
    {
        $this->Kommunikationspartnertyp = $kommunikationspartnertyp;

        return $this;
    }

    /**
     * Get Minimalwert value
     */
    public function getMinimalwert(): ?string
    {
        return $this->Minimalwert;
    }

    /**
     * Set Minimalwert value
     */
    public function setMinimalwert(?string $minimalwert = null): self
    {
        $this->Minimalwert = $minimalwert;

        return $this;
    }

    /**
     * Get Maximalwert value
     */
    public function getMaximalwert(): ?string
    {
        return $this->Maximalwert;
    }

    /**
     * Set Maximalwert value
     */
    public function setMaximalwert(?string $maximalwert = null): self
    {
        $this->Maximalwert = $maximalwert;

        return $this;
    }
}
