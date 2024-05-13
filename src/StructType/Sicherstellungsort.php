<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Sicherstellungsort StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Sicherstellungsort extends AbstractStructBase
{
    /**
     * The DatumSicherstellungFahrzeug
     */
    public ?string $DatumSicherstellungFahrzeug = null;

    /**
     * The MerkmalSicherstellungFahrzeug
     */
    public ?bool $MerkmalSicherstellungFahrzeug = null;

    /**
     * The Person
     */
    public ?\THAG\XKfz\StructType\Person $Person = null;

    /**
     * The Anschrift
     */
    public ?\THAG\XKfz\StructType\Anschrift $Anschrift = null;

    /**
     * Constructor method for Sicherstellungsort
     *
     * @uses Sicherstellungsort::setDatumSicherstellungFahrzeug()
     * @uses Sicherstellungsort::setMerkmalSicherstellungFahrzeug()
     * @uses Sicherstellungsort::setPerson()
     * @uses Sicherstellungsort::setAnschrift()
     */
    public function __construct(?string $datumSicherstellungFahrzeug = null, ?bool $merkmalSicherstellungFahrzeug = null, ?\THAG\XKfz\StructType\Person $person = null, ?\THAG\XKfz\StructType\Anschrift $anschrift = null)
    {
        $this
            ->setDatumSicherstellungFahrzeug($datumSicherstellungFahrzeug)
            ->setMerkmalSicherstellungFahrzeug($merkmalSicherstellungFahrzeug)
            ->setPerson($person)
            ->setAnschrift($anschrift);
    }

    /**
     * Get DatumSicherstellungFahrzeug value
     */
    public function getDatumSicherstellungFahrzeug(): ?string
    {
        return $this->DatumSicherstellungFahrzeug;
    }

    /**
     * Set DatumSicherstellungFahrzeug value
     */
    public function setDatumSicherstellungFahrzeug(?string $datumSicherstellungFahrzeug = null): self
    {
        $this->DatumSicherstellungFahrzeug = $datumSicherstellungFahrzeug;

        return $this;
    }

    /**
     * Get MerkmalSicherstellungFahrzeug value
     */
    public function getMerkmalSicherstellungFahrzeug(): ?bool
    {
        return $this->MerkmalSicherstellungFahrzeug;
    }

    /**
     * Set MerkmalSicherstellungFahrzeug value
     */
    public function setMerkmalSicherstellungFahrzeug(?bool $merkmalSicherstellungFahrzeug = null): self
    {
        $this->MerkmalSicherstellungFahrzeug = $merkmalSicherstellungFahrzeug;

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
