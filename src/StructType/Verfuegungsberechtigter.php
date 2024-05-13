<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Verfuegungsberechtigter StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Verfuegungsberechtigter extends AbstractStructBase
{
    /**
     * The DatumVerfuegungsberechtigungVon
     */
    public ?string $DatumVerfuegungsberechtigungVon = null;

    /**
     * The DatumVerfuegungsberechtigungBis
     */
    public ?string $DatumVerfuegungsberechtigungBis = null;

    /**
     * The HinweisSicherungsuebereignung
     */
    public ?bool $HinweisSicherungsuebereignung = null;

    /**
     * The Person
     */
    public ?\THAG\XKfz\StructType\Person $Person = null;

    /**
     * The Anschrift
     */
    public ?\THAG\XKfz\StructType\Anschrift $Anschrift = null;

    /**
     * Constructor method for Verfuegungsberechtigter
     *
     * @uses Verfuegungsberechtigter::setDatumVerfuegungsberechtigungVon()
     * @uses Verfuegungsberechtigter::setDatumVerfuegungsberechtigungBis()
     * @uses Verfuegungsberechtigter::setHinweisSicherungsuebereignung()
     * @uses Verfuegungsberechtigter::setPerson()
     * @uses Verfuegungsberechtigter::setAnschrift()
     */
    public function __construct(?string $datumVerfuegungsberechtigungVon = null, ?string $datumVerfuegungsberechtigungBis = null, ?bool $hinweisSicherungsuebereignung = null, ?\THAG\XKfz\StructType\Person $person = null, ?\THAG\XKfz\StructType\Anschrift $anschrift = null)
    {
        $this
            ->setDatumVerfuegungsberechtigungVon($datumVerfuegungsberechtigungVon)
            ->setDatumVerfuegungsberechtigungBis($datumVerfuegungsberechtigungBis)
            ->setHinweisSicherungsuebereignung($hinweisSicherungsuebereignung)
            ->setPerson($person)
            ->setAnschrift($anschrift);
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

    /**
     * Get HinweisSicherungsuebereignung value
     */
    public function getHinweisSicherungsuebereignung(): ?bool
    {
        return $this->HinweisSicherungsuebereignung;
    }

    /**
     * Set HinweisSicherungsuebereignung value
     */
    public function setHinweisSicherungsuebereignung(?bool $hinweisSicherungsuebereignung = null): self
    {
        $this->HinweisSicherungsuebereignung = $hinweisSicherungsuebereignung;

        return $this;
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
}
