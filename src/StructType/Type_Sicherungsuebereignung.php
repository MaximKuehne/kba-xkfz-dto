<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Sicherungsuebereignung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Sicherungsuebereignung extends AbstractStructBase
{
    /**
     * The Person
     */
    public ?\THAG\XKfz\StructType\Person $Person = null;

    /**
     * The Anschrift
     */
    public ?\THAG\XKfz\StructType\Anschrift $Anschrift = null;

    /**
     * The DatumVerfuegungsberechtigungVon
     */
    public ?string $DatumVerfuegungsberechtigungVon = null;

    /**
     * The DatumVerfuegungsberechtigungBis
     */
    public ?string $DatumVerfuegungsberechtigungBis = null;

    /**
     * Constructor method for Type.Sicherungsuebereignung
     *
     * @uses Type_Sicherungsuebereignung::setPerson()
     * @uses Type_Sicherungsuebereignung::setAnschrift()
     * @uses Type_Sicherungsuebereignung::setDatumVerfuegungsberechtigungVon()
     * @uses Type_Sicherungsuebereignung::setDatumVerfuegungsberechtigungBis()
     */
    public function __construct(?\THAG\XKfz\StructType\Person $person = null, ?\THAG\XKfz\StructType\Anschrift $anschrift = null, ?string $datumVerfuegungsberechtigungVon = null, ?string $datumVerfuegungsberechtigungBis = null)
    {
        $this
            ->setPerson($person)
            ->setAnschrift($anschrift)
            ->setDatumVerfuegungsberechtigungVon($datumVerfuegungsberechtigungVon)
            ->setDatumVerfuegungsberechtigungBis($datumVerfuegungsberechtigungBis);
    }

    /**
     * Get Person value
     */
    public function getPerson(): ?\THAG\XKfz\StructType\Person
    {
        return $this->Person;
    }

    /**
     * Set Person value
     */
    public function setPerson(?\THAG\XKfz\StructType\Person $person = null): self
    {
        $this->Person = $person;

        return $this;
    }

    /**
     * Get Anschrift value
     */
    public function getAnschrift(): ?\THAG\XKfz\StructType\Anschrift
    {
        return $this->Anschrift;
    }

    /**
     * Set Anschrift value
     */
    public function setAnschrift(?\THAG\XKfz\StructType\Anschrift $anschrift = null): self
    {
        $this->Anschrift = $anschrift;

        return $this;
    }

    /**
     * Get DatumVerfuegungsberechtigungVon value
     */
    public function getDatumVerfuegungsberechtigungVon(): ?string
    {
        return $this->DatumVerfuegungsberechtigungVon;
    }

    /**
     * Set DatumVerfuegungsberechtigungVon value
     */
    public function setDatumVerfuegungsberechtigungVon(?string $datumVerfuegungsberechtigungVon = null): self
    {
        $this->DatumVerfuegungsberechtigungVon = $datumVerfuegungsberechtigungVon;

        return $this;
    }

    /**
     * Get DatumVerfuegungsberechtigungBis value
     */
    public function getDatumVerfuegungsberechtigungBis(): ?string
    {
        return $this->DatumVerfuegungsberechtigungBis;
    }

    /**
     * Set DatumVerfuegungsberechtigungBis value
     */
    public function setDatumVerfuegungsberechtigungBis(?string $datumVerfuegungsberechtigungBis = null): self
    {
        $this->DatumVerfuegungsberechtigungBis = $datumVerfuegungsberechtigungBis;

        return $this;
    }
}
