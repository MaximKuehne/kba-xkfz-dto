<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Sicherstellungsort StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Sicherstellungsort extends AbstractStructBase
{
    /**
     * The DatumSicherstellungFahrzeug
     * @var string|null
     */
    public ?string $DatumSicherstellungFahrzeug = null;
    /**
     * The MerkmalSicherstellungFahrzeug
     * @var bool|null
     */
    public ?bool $MerkmalSicherstellungFahrzeug = null;
    /**
     * The Person
     * @var \THAG\XKfz\StructType\Person|null
     */
    public ?\THAG\XKfz\StructType\Person $Person = null;
    /**
     * The Anschrift
     * @var \THAG\XKfz\StructType\Anschrift|null
     */
    public ?\THAG\XKfz\StructType\Anschrift $Anschrift = null;
    /**
     * Constructor method for Sicherstellungsort
     * @uses Sicherstellungsort::setDatumSicherstellungFahrzeug()
     * @uses Sicherstellungsort::setMerkmalSicherstellungFahrzeug()
     * @uses Sicherstellungsort::setPerson()
     * @uses Sicherstellungsort::setAnschrift()
     * @param string $datumSicherstellungFahrzeug
     * @param bool $merkmalSicherstellungFahrzeug
     * @param \THAG\XKfz\StructType\Person $person
     * @param \THAG\XKfz\StructType\Anschrift $anschrift
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
     * @return string|null
     */
    public function getDatumSicherstellungFahrzeug(): ?string
    {
        return $this->DatumSicherstellungFahrzeug;
    }
    /**
     * Set DatumSicherstellungFahrzeug value
     * @param string $datumSicherstellungFahrzeug
     * @return \THAG\XKfz\StructType\Sicherstellungsort
     */
    public function setDatumSicherstellungFahrzeug(?string $datumSicherstellungFahrzeug = null): self
    {
        $this->DatumSicherstellungFahrzeug = $datumSicherstellungFahrzeug;
        
        return $this;
    }
    /**
     * Get MerkmalSicherstellungFahrzeug value
     * @return bool|null
     */
    public function getMerkmalSicherstellungFahrzeug(): ?bool
    {
        return $this->MerkmalSicherstellungFahrzeug;
    }
    /**
     * Set MerkmalSicherstellungFahrzeug value
     * @param bool $merkmalSicherstellungFahrzeug
     * @return \THAG\XKfz\StructType\Sicherstellungsort
     */
    public function setMerkmalSicherstellungFahrzeug(?bool $merkmalSicherstellungFahrzeug = null): self
    {
        $this->MerkmalSicherstellungFahrzeug = $merkmalSicherstellungFahrzeug;
        
        return $this;
    }
    /**
     * Get Person value
     * @return \THAG\XKfz\StructType\Person|null
     */
    public function getPerson(): ?\THAG\XKfz\StructType\Person
    {
        return $this->Person;
    }
    /**
     * Set Person value
     * @param \THAG\XKfz\StructType\Person $person
     * @return \THAG\XKfz\StructType\Sicherstellungsort
     */
    public function setPerson(?\THAG\XKfz\StructType\Person $person = null): self
    {
        $this->Person = $person;
        
        return $this;
    }
    /**
     * Get Anschrift value
     * @return \THAG\XKfz\StructType\Anschrift|null
     */
    public function getAnschrift(): ?\THAG\XKfz\StructType\Anschrift
    {
        return $this->Anschrift;
    }
    /**
     * Set Anschrift value
     * @param \THAG\XKfz\StructType\Anschrift $anschrift
     * @return \THAG\XKfz\StructType\Sicherstellungsort
     */
    public function setAnschrift(?\THAG\XKfz\StructType\Anschrift $anschrift = null): self
    {
        $this->Anschrift = $anschrift;
        
        return $this;
    }
}
