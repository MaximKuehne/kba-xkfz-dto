<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatentypCodeDatenQuelle StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DatentypCodeDatenQuelle extends AbstractStructBase
{
    /**
     * The Datenpfad
     */
    public ?string $Datenpfad = null;

    /**
     * The DatentypCodeDatenQuelleCode
     */
    public ?string $DatentypCodeDatenQuelleCode = null;

    /**
     * The DatentypCodeDatenQuelleName
     */
    public ?string $DatentypCodeDatenQuelleName = null;

    /**
     * The DatentypCodeDatenQuelleBeschreibung
     */
    public ?string $DatentypCodeDatenQuelleBeschreibung = null;

    /**
     * Constructor method for DatentypCodeDatenQuelle
     *
     * @uses DatentypCodeDatenQuelle::setDatenpfad()
     * @uses DatentypCodeDatenQuelle::setDatentypCodeDatenQuelleCode()
     * @uses DatentypCodeDatenQuelle::setDatentypCodeDatenQuelleName()
     * @uses DatentypCodeDatenQuelle::setDatentypCodeDatenQuelleBeschreibung()
     */
    public function __construct(?string $datenpfad = null, ?string $datentypCodeDatenQuelleCode = null, ?string $datentypCodeDatenQuelleName = null, ?string $datentypCodeDatenQuelleBeschreibung = null)
    {
        $this
            ->setDatenpfad($datenpfad)
            ->setDatentypCodeDatenQuelleCode($datentypCodeDatenQuelleCode)
            ->setDatentypCodeDatenQuelleName($datentypCodeDatenQuelleName)
            ->setDatentypCodeDatenQuelleBeschreibung($datentypCodeDatenQuelleBeschreibung);
    }

    /**
     * Get Datenpfad value
     */
    public function getDatenpfad(): ?string
    {
        return $this->Datenpfad;
    }

    /**
     * Set Datenpfad value
     */
    public function setDatenpfad(?string $datenpfad = null): self
    {
        $this->Datenpfad = $datenpfad;

        return $this;
    }

    /**
     * Get DatentypCodeDatenQuelleCode value
     */
    public function getDatentypCodeDatenQuelleCode(): ?string
    {
        return $this->DatentypCodeDatenQuelleCode;
    }

    /**
     * Set DatentypCodeDatenQuelleCode value
     */
    public function setDatentypCodeDatenQuelleCode(?string $datentypCodeDatenQuelleCode = null): self
    {
        $this->DatentypCodeDatenQuelleCode = $datentypCodeDatenQuelleCode;

        return $this;
    }

    /**
     * Get DatentypCodeDatenQuelleName value
     */
    public function getDatentypCodeDatenQuelleName(): ?string
    {
        return $this->DatentypCodeDatenQuelleName;
    }

    /**
     * Set DatentypCodeDatenQuelleName value
     */
    public function setDatentypCodeDatenQuelleName(?string $datentypCodeDatenQuelleName = null): self
    {
        $this->DatentypCodeDatenQuelleName = $datentypCodeDatenQuelleName;

        return $this;
    }

    /**
     * Get DatentypCodeDatenQuelleBeschreibung value
     */
    public function getDatentypCodeDatenQuelleBeschreibung(): ?string
    {
        return $this->DatentypCodeDatenQuelleBeschreibung;
    }

    /**
     * Set DatentypCodeDatenQuelleBeschreibung value
     */
    public function setDatentypCodeDatenQuelleBeschreibung(?string $datentypCodeDatenQuelleBeschreibung = null): self
    {
        $this->DatentypCodeDatenQuelleBeschreibung = $datentypCodeDatenQuelleBeschreibung;

        return $this;
    }
}
