<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Sicherungsuebereignung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Sicherungsuebereignung extends AbstractStructBase
{
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
     * The DatumVerfuegungsberechtigungVon
     * @var string|null
     */
    public ?string $DatumVerfuegungsberechtigungVon = null;
    /**
     * The DatumVerfuegungsberechtigungBis
     * @var string|null
     */
    public ?string $DatumVerfuegungsberechtigungBis = null;
    /**
     * Constructor method for Type.Sicherungsuebereignung
     * @uses Type_Sicherungsuebereignung::setPerson()
     * @uses Type_Sicherungsuebereignung::setAnschrift()
     * @uses Type_Sicherungsuebereignung::setDatumVerfuegungsberechtigungVon()
     * @uses Type_Sicherungsuebereignung::setDatumVerfuegungsberechtigungBis()
     * @param \THAG\XKfz\StructType\Person $person
     * @param \THAG\XKfz\StructType\Anschrift $anschrift
     * @param string $datumVerfuegungsberechtigungVon
     * @param string $datumVerfuegungsberechtigungBis
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
     * @return \THAG\XKfz\StructType\Person|null
     */
    public function getPerson(): ?\THAG\XKfz\StructType\Person
    {
        return $this->Person;
    }
    /**
     * Set Person value
     * @param \THAG\XKfz\StructType\Person $person
     * @return \THAG\XKfz\StructType\Type_Sicherungsuebereignung
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
     * @return \THAG\XKfz\StructType\Type_Sicherungsuebereignung
     */
    public function setAnschrift(?\THAG\XKfz\StructType\Anschrift $anschrift = null): self
    {
        $this->Anschrift = $anschrift;
        
        return $this;
    }
    /**
     * Get DatumVerfuegungsberechtigungVon value
     * @return string|null
     */
    public function getDatumVerfuegungsberechtigungVon(): ?string
    {
        return $this->DatumVerfuegungsberechtigungVon;
    }
    /**
     * Set DatumVerfuegungsberechtigungVon value
     * @param string $datumVerfuegungsberechtigungVon
     * @return \THAG\XKfz\StructType\Type_Sicherungsuebereignung
     */
    public function setDatumVerfuegungsberechtigungVon(?string $datumVerfuegungsberechtigungVon = null): self
    {
        $this->DatumVerfuegungsberechtigungVon = $datumVerfuegungsberechtigungVon;
        
        return $this;
    }
    /**
     * Get DatumVerfuegungsberechtigungBis value
     * @return string|null
     */
    public function getDatumVerfuegungsberechtigungBis(): ?string
    {
        return $this->DatumVerfuegungsberechtigungBis;
    }
    /**
     * Set DatumVerfuegungsberechtigungBis value
     * @param string $datumVerfuegungsberechtigungBis
     * @return \THAG\XKfz\StructType\Type_Sicherungsuebereignung
     */
    public function setDatumVerfuegungsberechtigungBis(?string $datumVerfuegungsberechtigungBis = null): self
    {
        $this->DatumVerfuegungsberechtigungBis = $datumVerfuegungsberechtigungBis;
        
        return $this;
    }
}
